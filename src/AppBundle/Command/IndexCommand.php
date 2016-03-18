<?php
/**
 * Class IndexCommand
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

class IndexCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('media:index')
            ->setDescription('Index media files to database')
            ->addArgument(
                'baseFolder',
                InputArgument::REQUIRED,
                'Folder containing media data'
            )
            ->addArgument(
                'thumbFolder',
                InputArgument::REQUIRED,
                'Folder containing thumbnails'
            )
            ->addArgument(
                'previewFolder',
                InputArgument::REQUIRED,
                'Folder containing preview images'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $doctrine = $this->getContainer()->get('doctrine');
        $em = $doctrine->getManager();

        $baseFolder = $input->getArgument('baseFolder');
        if (!is_dir($baseFolder)) die("baseFolder is not a folder\n");

        $thumbBaseFolder = $input->getArgument('thumbFolder');
        if (!is_dir($baseFolder)) die("thumbFolder is not a folder\n");

        $previewBaseFolder = $input->getArgument('previewFolder');
        if (!is_dir($previewBaseFolder)) die("previewFolder is not a folder\n");

        $mediaDrive=MediaDrive::bootMediaDrive($doctrine,$baseFolder, $previewBaseFolder, $thumbBaseFolder);
        $mediaDrive->createIndex();

        $em->persist($mediaDrive);
        $em->flush();

    }
}
