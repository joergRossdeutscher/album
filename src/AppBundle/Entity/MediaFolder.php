<?php

namespace AppBundle\Entity;
use AppBundle\Model\MediaFolderFunctions;

/**
 * MediaFolder
 */
class MediaFolder extends \AppBundle\Model\MediaFolderFunctions
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $path;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $mediaFiles;

    /**
     * @var \AppBundle\Entity\MediaDrive
     */
    private $mediaDrive;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->mediaFiles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return MediaFolder
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Add mediaFile
     *
     * @param \AppBundle\Entity\MediaFile $mediaFile
     *
     * @return MediaFolder
     */
    public function addMediaFile(\AppBundle\Entity\MediaFile $mediaFile)
    {
        $this->mediaFiles[] = $mediaFile;

        return $this;
    }

    /**
     * Remove mediaFile
     *
     * @param \AppBundle\Entity\MediaFile $mediaFile
     */
    public function removeMediaFile(\AppBundle\Entity\MediaFile $mediaFile)
    {
        $this->mediaFiles->removeElement($mediaFile);
    }

    /**
     * Get mediaFiles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMediaFiles()
    {
        return $this->mediaFiles;
    }

    /**
     * Set mediaDrive
     *
     * @param \AppBundle\Entity\MediaDrive $mediaDrive
     *
     * @return MediaFolder
     */
    public function setMediaDrive(\AppBundle\Entity\MediaDrive $mediaDrive = null)
    {
        $this->mediaDrive = $mediaDrive;

        return $this;
    }

    /**
     * Get mediaDrive
     *
     * @return \AppBundle\Entity\MediaDrive
     */
    public function getMediaDrive()
    {
        return $this->mediaDrive;
    }
}
