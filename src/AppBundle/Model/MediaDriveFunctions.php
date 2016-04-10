<?php
/**
 * Class MediaDriveFunctions
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

class MediaDriveFunctions extends DefaultFunctions
{
    protected $mediaFolder;

    public function __construct($doctrine)
    {
        parent::__construct($doctrine);
        $this->mediaFolder = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @param $doctrine
     * @param $baseFolder
     * @param null $previewBaseFolder
     * @param null $thumbBaseFolder
     * @return MediaDrive
     */
    static function bootMediaDrive($doctrine , $baseFolder, $previewBaseFolder=null, $thumbBaseFolder=null) {

        $mediaDriveRepo = $doctrine->getRepository('AppBundle:MediaDrive');

        $mediaTriple = new MediaTriple($baseFolder, $baseFolder);

        $mediaDrive = $mediaDriveRepo->mediaDriveExistsByTriple($mediaTriple);

        if (!$mediaDrive) {
            $mediaDrive = new MediaDrive($doctrine);
            $mediaDrive
                ->setMediaFileBaseFolder($baseFolder)
                ->setPreviewBaseFolder($previewBaseFolder)
                ->setThumbnailBaseFolder($thumbBaseFolder);
        } else {
            $mediaDrive=$mediaDriveRepo->findOneById($mediaDrive->getId());
            $mediaDrive->initOrm($doctrine); // Doctrine doesn't trigger my constructors
        }

        $em=$mediaDrive->em;
        $em->persist($mediaDrive);
        $em->flush();

        return $mediaDrive;
    }

    public function getOrAddNewMediaFolder($folderDir)
    {
        $mediaFolder = $this->mediaFolderRepo->findOneByPath($folderDir);
        if (is_null($mediaFolder)) {
            $mediaFolder = new MediaFolder();
            $mediaFolder
                ->setMediaDrive($this)
                ->setPath($folderDir);

#            $this->em->persistmediaFolder);
#            $this->em->flush()
        }
        return $mediaFolder;
    }

    public function createIndex()
    {
        $mediaDriveFolder = $this->getMediaFileBaseFolder();
        $mediaFileRepo = $this->mediaFileRepo;
        $mediaFolderRepo = $this->mediaFolderRepo;

        $files = FileHelper::findFiles(array(
            'path' => $mediaDriveFolder
        ));

        foreach ($files as $file) {
            if (preg_match('/(jpe?g|png|gif|mpe?g|avi|mp4|mkv|m4v)$/uis', $file)) {

                $mediaTriple = new MediaTriple($mediaDriveFolder, $file);

                $mediaFolder = $mediaFolderRepo->mediaFolderExistsByTriple($mediaTriple);
                if (!$mediaFolder) {
                    $mediaFolder = $this->addFolder($mediaTriple->mediaFolderPath);
                    $this->em->persist($mediaFolder);
                    $this->em->flush();
                }

                $mediaFile = $mediaFileRepo->mediaFileExistsByTriple($mediaTriple);
                if (!$mediaFile) {
                    $mediaFile = $mediaFolder->addFile($mediaTriple->mediaFileName);
                    $this->em->persist($mediaFile);
                    $this->em->flush();
                }

                # This checks existance and filedate, so comes free in performance to call
                $mediaFile->createThumbnail('thumbnail');
                $mediaFile->createThumbnail('preview');

            }
        }
    }

    public function addFolder($path)
    {
        $mediaFolder = new MediaFolder();
        $mediaFolder
            ->setPath($path)
            ->setMediaDrive($this);

        return $mediaFolder;
    }

}
