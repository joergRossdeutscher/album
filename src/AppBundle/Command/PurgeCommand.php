<?php
/**
 * Class PurgeCommand
 */

namespace AppBundle\Command;

use AppBundle\AppBundle;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use AppBundle\Entity\MediaFile;
use AppBundle\Entity\MediaFolder;
use AppBundle\Entity\MediaDrive;
use AppBundle\Model\FileHelper;
use AppBundle\Model\MediaTriple;

class PurgeCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('media:purge')
            ->setDescription('Purge the whole database');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $doctrine = $this->getContainer()->get('doctrine');
        $em = $doctrine->getManager();

        /* @var $mediaDriveRepo \AppBundle\Repository\MediaDriveRepository */
        $mediaDriveRepo = $doctrine->getRepository('AppBundle:MediaDrive');
        $mediaDriveRepo->deleteAll();

        /* @var $mediaFileRepo \AppBundle\Repository\MediaFileRepository */
        $mediaFileRepo = $doctrine->getRepository('AppBundle:MediaFile');
        $mediaFileRepo->deleteAll();

        /* @var $mediaFolderRepo \AppBundle\Repository\MediaFolderRepository */
        $mediaFolderRepo = $doctrine->getRepository('AppBundle:MediaFolder');
        $mediaFolderRepo->deleteAll();

        $em->flush();

    }
}
