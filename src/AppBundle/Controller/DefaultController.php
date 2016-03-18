<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\MediaFile;
use AppBundle\Entity\MediaFolder;
use AppBundle\Entity\MediaDrive;
use AppBundle\Model\FileHelper;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    public function listimagesAction(Request $request)
    {
        $mediaDriveId = $request->attributes->get('mediadriveid');
        $mediaFolderId = $request->attributes->get('mediafolderid');

        $doctrine = $this->get('doctrine');
        $em = $doctrine->getManager();

        $mediaDriveRepo = $doctrine->getRepository('AppBundle:MediaDrive');
        $mediaFolderRepo = $doctrine->getRepository('AppBundle:MediaFolder');
        $mediaFileRepo = $doctrine->getRepository('AppBundle:MediaFile');

        $mediaDrive = $mediaDriveRepo->find($mediaDriveId);
        $mediaFolder = $mediaFolderRepo->find($mediaFolderId);
        $mediaFiles = $mediaFolder->getMediaFiles();

        return $this->render('default/listmedia.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'mediaDriveId' => $mediaDriveId,
            'mediaDrive' => $mediaDrive,
            'mediaFolderId' => $mediaFolderId,
            'mediaFiles' => $mediaFiles,
        ]);
    }

    public function listfoldersAction(Request $request)
    {
        $mediaDriveId = $request->attributes->get('mediadriveid');

        $doctrine = $this->get('doctrine');
        $em = $doctrine->getManager();

        $mediaDriveRepo = $doctrine->getRepository('AppBundle:MediaDrive');
        $mediaFolderRepo = $doctrine->getRepository('AppBundle:MediaFolder');

        $mediaDrive = $mediaDriveRepo->find($mediaDriveId);
        $mediaFolders = $mediaDrive->getMediaFolders();

        return $this->render('default/listfolder.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'mediaDriveId' => $mediaDriveId,
            'mediaDrive' => $mediaDrive,
            'mediaFolders' => $mediaFolders,
        ]);
    }
}
