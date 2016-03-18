<?php

namespace AppBundle\Entity;
use AppBundle\AppBundle;

/**
 * MediaDrive
 */
class MediaDrive extends \AppBundle\Model\MediaDriveFunctions
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $mediaFileBaseFolder;

    /**
     * @var string
     */
    private $previewBaseFolder;

    /**
     * @var string
     */
    private $thumbnailBaseFolder;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $mediaFolders;

    /**
     * Constructor
     */
    public function __construct($doctrine )
    {
        parent::__construct($doctrine );
        $this->mediaFolders = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set mediaFileBaseFolder
     *
     * @param string $mediaFileBaseFolder
     *
     * @return MediaDrive
     */
    public function setMediaFileBaseFolder($mediaFileBaseFolder)
    {
        $this->mediaFileBaseFolder = $mediaFileBaseFolder;

        return $this;
    }

    /**
     * Get mediaFileBaseFolder
     *
     * @return string
     */
    public function getMediaFileBaseFolder()
    {
        return $this->mediaFileBaseFolder;
    }

    /**
     * Set previewBaseFolder
     *
     * @param string $previewBaseFolder
     *
     * @return MediaDrive
     */
    public function setPreviewBaseFolder($previewBaseFolder)
    {
        $this->previewBaseFolder = $previewBaseFolder;

        return $this;
    }

    /**
     * Get previewBaseFolder
     *
     * @return string
     */
    public function getPreviewBaseFolder()
    {
        return $this->previewBaseFolder;
    }

    /**
     * Set thumbnailBaseFolder
     *
     * @param string $thumbnailBaseFolder
     *
     * @return MediaDrive
     */
    public function setThumbnailBaseFolder($thumbnailBaseFolder)
    {
        $this->thumbnailBaseFolder = $thumbnailBaseFolder;

        return $this;
    }

    /**
     * Get thumbnailBaseFolder
     *
     * @return string
     */
    public function getThumbnailBaseFolder()
    {
        return $this->thumbnailBaseFolder;
    }

    /**
     * Add mediaFolder
     *
     * @param \AppBundle\Entity\MediaFile $mediaFolder
     *
     * @return MediaDrive
     */
    public function addMediaFolder(\AppBundle\Entity\MediaFile $mediaFolder)
    {
        $this->mediaFolders[] = $mediaFolder;

        return $this;
    }

    /**
     * Remove mediaFolder
     *
     * @param \AppBundle\Entity\MediaFile $mediaFolder
     */
    public function removeMediaFolder(\AppBundle\Entity\MediaFile $mediaFolder)
    {
        $this->mediaFolders->removeElement($mediaFolder);
    }

    /**
     * Get mediaFolders
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMediaFolders()
    {
        return $this->mediaFolders;
    }
}
