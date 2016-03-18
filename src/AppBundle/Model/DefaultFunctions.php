<?php
/**
 * Class DefaultFunctions
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

class DefaultFunctions
{

    public $doctrine = null;
    public $em = null;

    /* @var $mediaDriveRepo \AppBundle\Repository\MediaDriveRepository */
    public $mediaDriveRepo = null;

    /* @var $mediaFileRepo \AppBundle\Repository\MediaFileRepository */
    public $mediaFileRepo = null;

    /* @var $mediaFolderRepo \AppBundle\Repository\MediaFolderRepository */
    public $mediaFolderRepo = null;

    public function __construct($doctrine = null)
    {
        /* This normally happens only when a MediaDrive is initialized, not for MediaFolders or MediaFiles */
        if (!is_null($doctrine)) {
            $this->initOrm($doctrine);
        }
        if (is_callable('parent::__construct')) {
            parent::__construct();
        }
    }

    public function initOrm($doctrine)
    {
        $this->doctrine = $doctrine;
        $this->em = $this->doctrine->getManager();
        $this->mediaDriveRepo = $this->doctrine->getRepository('AppBundle:MediaDrive');
        $this->mediaFileRepo = $this->doctrine->getRepository('AppBundle:MediaFile');
        $this->mediaFolderRepo = $this->doctrine->getRepository('AppBundle:MediaFolder');
    }

}
