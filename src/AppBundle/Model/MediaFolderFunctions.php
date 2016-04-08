<?php
/**
 * Class MediaFolderFunctions
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

class MediaFolderFunctions extends DefaultFunctions
{

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $mediaFiles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->mediaFiles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getBaseFolder()
    {
        return $this->getMediaDrive()->getMediaFileBaseFolder();
    }

    public function getThumbBaseFolder()
    {
        return $this->getMediaDrive()->getThumbnailBaseFolder();
    }

    public function getRelPath()
    {
        return $this->getPath();
    }

    public function setRelPath($path) {
        $relPath = substr($path , strlen($this->getBaseFolder()));
        $this->setPath($relPath);
        return $this;
    }

    public function getOrAddNewMediaFile($basename,$mediaFileRepo) {

        $z=$mediaFileRepo->mediaFileExists(1, 1, $basename);
        echo "ARGH!"; die;

        if(!count($mediaFile) ) {
            $mediaFile = $this->addNewMediaFile($basename);
        }

        return $mediaFile;
    }

    public function addNewMediaFile($filename) {
        $mediaFile = new MediaFile();
        $mediaFile->setFileName($filename);
        $mediaFile->setMediaFolder($this);
        return $mediaFile;
    }


    public function addFile($name)
    {
        $mediaFile = new MediaFile();
        $mediaFile
            ->setFileName($name)
            ->setMediaFolder($this)
            ->initFileAndMediaType()
            ->initOrientation()
            ->createThumbnail('thumbnail')
            ->createThumbnail('preview')
            ->getGpsCoordinates();

        return $mediaFile;
    }

    public function OLD_addFile($file)
    {
        $pathInfo = pathinfo($file);
        $mediaFileBaseFolder = $this->getMediaFileBaseFolder();
        $relDir = (string)substr($pathInfo['dirname'], strlen($mediaFileBaseFolder));

        $mediaFolder = $this->getOrAddNewMediaFolder($relDir);
        $this->em->persist($mediaFolder);

        #$mediaFile = $mediaFolder->addNewMediaFile($pathInfo['basename']);
        $mediaFile = $mediaFolder->getOrAddNewMediaFile($pathInfo['basename'], $this->mediaFileRepo);

        $mediaFile
            ->initFileAndMediaType()
            ->initOrientation()
            ->createThumbnail()
            ->getGpsCoordinates();

        $this->em->persist($mediaFile);
        $this->em->flush();

        return $mediaFile;
    }

}
