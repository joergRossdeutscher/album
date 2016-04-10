<?php
/**
 * Class MediaFileFunctions
 *
 * This Software is the property of superReal and is protected
 * by copyright law - it is NOT Freeware.
 *
 * Any unauthorized use of this software without a valid license key
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 *
 * @link      http://www.superreal.de
 * @copyright (C) superReal 2015
 * @author    Joerg Rossdeutscher <j.rossdeutscher _AT_ superreal.de>
 */

namespace AppBundle\Model;

use AppBundle\Entity\MediaFile;
use AppBundle\Entity\MediaFolder;
use AppBundle\Entity\MediaDrive;
use AppBundle\Model\FileHelper;

class MediaFileFunctions extends DefaultFunctions
{

    public function initFileAndMediaType()
    {
        preg_match('/(jpe?g|png|gif|mpe?g|avi|mp4|mkv|m4v)$/uis', strtolower($this->getFileName()), $tmp);
        if (count($tmp)) {
            $fileType = $tmp[1];
            if ($fileType == 'jpeg') $fileType = 'jpg';
            if ($fileType == 'mpeg') $fileType = 'mpg';
            if ($fileType == 'mp4') $fileType = 'mpg';
            if ($fileType == 'm4v') $fileType = 'mpg';

            $this->setFileType($fileType);

            $mediaType = 'image';
            if ($fileType == 'mpg' ||
                $fileType == 'avi' ||
                $fileType == 'mkv'
            ) {
                $mediaType = 'movie';
            }
            $this->setMediaType($mediaType);

        }
        return $this;
    }

    public function getBaseFolder()
    {
        return $this->getMediaFolder()->getMediaDrive()->getMediaFileBaseFolder();
    }

    public function getRelPath()
    {
        return $this->getMediaFolder()->getPath() . '/' . $this->getFileName();
    }

    public function getAbsPath()
    {
        return $this->getBaseFolder() . '/' . $this->getRelPath();
    }

    public function getThumbBaseFolder($variant)
    {
        if($variant=='thumbnail') return $this->getMediaFolder()->getMediaDrive()->getThumbnailBaseFolder();
        if($variant=='preview') return $this->getMediaFolder()->getMediaDrive()->getPreviewBaseFolder();
        die('Shit: ' . __FILE__ . '|' . __LINE__);
    }

    public function initOrientation()
    {
        if($this->getMediaType()=='movie') {
        $this->setOrientation(1);
            return $this;
        }

        $filename = $this->getAbsPath();
        $exif = null;
        #$img = @imagecreatefromjpeg($filename);
        $exif = @exif_read_data($filename);
        if (!isset($exif['Orientation'])) {
            $cmd = '/usr/local/bin/exiftool  -exif:Orientation -n -j ' . "'$filename'";
            $tmp = @json_decode(`$cmd`)[0]->Orientation;
            $exif = array(
                'Orientation' => $tmp
            );
        }
        $this->setOrientation($exif['Orientation']);
        return $this;
    }

    public function getVariantFileName($variant){
        if($variant=='thumbnail') return $this->getThumbFileName();
        if($variant=='preview') return $this->getPreviewFileName();
        die('Shit: ' . __FILE__ . '|' . __LINE__);
    }
    public function setVariantFileName($variant, $fileName){
        if($variant=='thumbnail') return $this->setThumbFileName($fileName);
        if($variant=='preview') return $this->setPreviewFileName($fileName);
        die('Shit: ' . __FILE__ . '|' . __LINE__);
    }

    public function createThumbnail($variant){

        $thumbDir = $this->getThumbBaseFolder($variant) . '/' . $this->getMediaFolder()->getPath();

        if( ! is_dir($thumbDir) ){
            \AppBundle\Model\FileHelper::mkdir_p($thumbDir);
        }

        if($this->getMediaType()=='image') {
            $this->setVariantFileName($variant, $this->getFileName());
            $thumbFile = $thumbDir .'/' . $this->getVariantFileName($variant);
            $hiresFile = $this->getFullPath();
            $this->updateThumbnailImageFile($variant, $variant == 'thumbnail' ? 200:900, $hiresFile, $thumbFile);
        }
        if($this->getMediaType()=='movie') {
            $this->setVariantFileName($variant, $this->getFileName() . '.gif');
            $thumbFile = $thumbDir .'/' . $this->getVariantFileName($variant);
            $hiresFile = $this->getFullPath();
            $this->updateThumbnailMovieFile($variant, $variant == 'thumbnail' ? 200:400, $hiresFile, $thumbFile);
        }

        return $this;
    }

    function updateThumbnailImageFile($variant,$thumbHeight, $hiresFile, $thumbFile )
    {

        if( @filemtime($thumbFile) == @filemtime($hiresFile) ) return true;

#        $this->createThumbdirectory();

        list($originalWidth, $originalHeight, $originalFileType) = getimagesize($hiresFile);

        $originalGdImage = false;
        switch ($originalFileType) {
            case IMAGETYPE_GIF:
                $originalGdImage = imagecreatefromgif($hiresFile);
                break;
            case IMAGETYPE_JPEG:
                $originalGdImage = $this->imagecreatefromjpegexif($hiresFile);
                if( ! is_resource($originalGdImage) ) return false;
                $originalWidth = ImageSX($originalGdImage);
                $originalHeight = ImageSY($originalGdImage);
                break;
            case IMAGETYPE_PNG:
                $originalGdImage = imagecreatefrompng($hiresFile);
                break;
        }
        if ($originalGdImage === false) {
            return false;
        }
        $originalAspectRatio = $originalWidth / $originalHeight;
        $thumbWidth = $thumbHeight * $originalAspectRatio;

        $thumbGdImage = imagecreatetruecolor($thumbWidth, $thumbHeight);
        imagecopyresampled($thumbGdImage, $originalGdImage, 0, 0, 0, 0, $thumbWidth, $thumbHeight, $originalWidth, $originalHeight);
        imagejpeg($thumbGdImage, $thumbFile, 90);
        imagedestroy($originalGdImage);
        imagedestroy($thumbGdImage);

        touch($thumbFile, filemtime($hiresFile));
        return true;
    }

    function imagecreatefromjpegexif($filename)
    {

        $img = @imagecreatefromjpeg($filename);

        $orientation = $this->getOrientation();

        if ($img && $orientation)
        {

            if ($orientation == 6 || $orientation == 5)
                $img = imagerotate($img, 270, null);
            if ($orientation == 3 || $orientation == 4)
                $img = imagerotate($img, 180, null);
            if ($orientation == 8 || $orientation == 7)
                $img = imagerotate($img, 90, null);

            if ($orientation == 5 || $orientation == 4 || $orientation == 7)
                imageflip($img, IMG_FLIP_HORIZONTAL);
        }
        return $img;

    }


    function updateThumbnailMovieFile($variant, $thumbHeight, $filepathOriginal, $filepathThumb )
    {

        if( @filemtime($filepathThumb) == @filemtime($filepathOriginal) ) return true;

        $movie2gifBinary = __DIR__ . '/../Resources/bin/movie2gif.sh';

        $cmd = "{$movie2gifBinary} \"{$filepathOriginal}\" \"{$filepathThumb}\"";
        `{$cmd}`;
        if(file_exists($filepathThumb)) {
            touch($filepathThumb, filemtime($filepathOriginal));
        }
        return true;
    }

    public function getFullPath() {
        return $this->getBaseFolder() . '/' . $this->getMediaFolder()->getPath() .'/' . $this->getFileName();
    }

    public function getGpsCoordinates()
    {
        $hiresFile = $this->getFullPath();

        $csvTempFile = tempnam(sys_get_temp_dir(), 'album');

        $cmd =
            "exiftool " .
            "-n " . # Exact coordinates instead rounded degrees
            # Output fields:
            "-gpslatitude -gpslongitude " .
            # Format:
            "-csv " .
            # Shut up
            "-quiet " .

            # Folder with images
            "'{$hiresFile}' " .

            "> $csvTempFile";

        `$cmd`;
        $fileList = $this->csvToArray($csvTempFile);
        #echo "$cmd\n";
        $this->setGpsLat(@$fileList[0]['GPSLatitude']);
        $this->setGpsLon(@$fileList[0]['GPSLongitude']);

#        print_r($fileList);
    }

    public function getFullWebPath($variant){
        switch ($variant){
            case "preview":
                return
                    '/' .
                    $this->getMediaFolder()->getMediaDrive()->getPreviewBaseFolder() .'/' .
                    $this->getMediaFolder()->getPath() . '/' .
                    $this->getPreviewFileName();
                    break;
            case "thumbnail":
                return
                    '/' .
                    $this->getMediaFolder()->getMediaDrive()->getThumbnailBaseFolder() .'/' .
                    $this->getMediaFolder()->getPath() . '/' .
                    $this->getThumbFileName();
                    break;
            default:
                die('Hm? ' . __FILE__ . ":" . __LINE__);
                break;
        }
    }


    /**
     * @param string $filename
     * @param string $delimiter
     * @return array|bool
     */
    function csvToArray($filename = '', $delimiter = ',')
    {
        /**
         * Convert a comma separated file into an associated array.
         * The first row should contain the array keys.
         *
         * Example:
         *
         * @param string $filename Path to the CSV file
         * @param string $delimiter The separator used in the file
         * @return array
         * @link http://gist.github.com/385876
         * @author Jay Williams <http://myd3.com/>
         * @copyright Copyright (c) 2010, Jay Williams
         * @license http://www.opensource.org/licenses/mit-license.php MIT License
         */
        if (!file_exists($filename) || !is_readable($filename)) {
            return false;
        }
        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
                if (!$header) {
                    $header = $row;
                } else {
                    $data[] = array_combine($header, $row);
                }
            }
            fclose($handle);
        }
        return $data;
    }

}
