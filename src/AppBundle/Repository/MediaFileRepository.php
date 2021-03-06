<?php

namespace AppBundle\Repository;

/**
 * MediaFileRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MediaFileRepository extends \Doctrine\ORM\EntityRepository
{

    public function deleteAll()
    {
        $em = $this->getEntityManager();
        foreach ($this->findAll() as $m) {
            $em->remove($m);
        }
        $em->flush();
    }

    public function mediaFileExistsByTriple($mediaFileTriple)
    {
        $em = $this->getEntityManager();

        $mediaDriveName = $mediaFileTriple->mediaDrivePath;
        $mediaFolderName = $mediaFileTriple->mediaFolderPath;
        $mediaFileName = $mediaFileTriple->mediaFileName;

        $dql = <<<DQL
SELECT
    file.id
    FROM AppBundle:MediaFile file
        INNER JOIN AppBundle:MediaFolder folder WITH file.mediaFolder = folder
        INNER JOIN AppBundle:MediaDrive drive WITH folder.mediaDrive = drive
    WHERE
        drive.mediaFileBaseFolder=:driveName AND
        folder.path=:folderName AND
        file.fileName=:fileName
DQL;

        $retId=$em
            ->createQuery( $dql )
            ->setMaxResults(1)
            ->setParameter('fileName', $mediaFileName)
            ->setParameter('folderName', $mediaFolderName)
            ->setParameter('driveName', $mediaDriveName)
            ->getResult();
        $retId = @$retId[0]['id'];

        $ret = $retId ? $this->findOneById($retId) : null;
        return $ret;

    }

    public function OLD_mediaFileExists($mediaDriveId , $mediaFolderId , $mediaFileName)
    {
        $em = $this->getEntityManager();

        $dql = <<<DQL
SELECT
    file.fileName , folder.path , drive.mediaFileBaseFolder
    FROM AppBundle:MediaFile file
        INNER JOIN AppBundle:MediaFolder folder WITH file = folder
        INNER JOIN AppBundle:MediaDrive drive WITH folder = drive
    WHERE
        folder=:folderId AND drive=:driveId
DQL;

        $ret=$em
            ->createQuery( $dql )
            ->setMaxResults(1)
            ->setParameter('folderId', $mediaFolderId)
            ->setParameter('driveId', $mediaDriveId)
            ->getResult();
        return $ret;

    }
}
