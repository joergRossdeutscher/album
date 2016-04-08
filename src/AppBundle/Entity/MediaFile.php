<?php

namespace AppBundle\Entity;

/**
 * MediaFile
 */
class MediaFile extends \AppBundle\Model\MediaFileFunctions
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $fileName;

    /**
     * @var string
     */
    private $fileType;

    /**
     * @var string
     */
    private $mediaType;

    /**
     * @var string
     */
    private $thumbFileName;

    /**
     * @var float
     */
    private $gpsLat;

    /**
     * @var float
     */
    private $gpsLon;

    /**
     * @var integer
     */
    private $orientation;

    /**
     * @var \AppBundle\Entity\MediaFolder
     */
    private $mediaFolder;


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
     * Set fileName
     *
     * @param string $fileName
     *
     * @return MediaFile
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set fileType
     *
     * @param string $fileType
     *
     * @return MediaFile
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;

        return $this;
    }

    /**
     * Get fileType
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * Set mediaType
     *
     * @param string $mediaType
     *
     * @return MediaFile
     */
    public function setMediaType($mediaType)
    {
        $this->mediaType = $mediaType;

        return $this;
    }

    /**
     * Get mediaType
     *
     * @return string
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }

    /**
     * Set thumbFileName
     *
     * @param string $thumbFileName
     *
     * @return MediaFile
     */
    public function setThumbFileName($thumbFileName)
    {
        $this->thumbFileName = $thumbFileName;

        return $this;
    }

    /**
     * Get thumbFileName
     *
     * @return string
     */
    public function getThumbFileName()
    {
        return $this->thumbFileName;
    }

    /**
     * Set gpsLat
     *
     * @param float $gpsLat
     *
     * @return MediaFile
     */
    public function setGpsLat($gpsLat)
    {
        $this->gpsLat = $gpsLat;

        return $this;
    }

    /**
     * Get gpsLat
     *
     * @return float
     */
    public function getGpsLat()
    {
        return $this->gpsLat;
    }

    /**
     * Set gpsLon
     *
     * @param float $gpsLon
     *
     * @return MediaFile
     */
    public function setGpsLon($gpsLon)
    {
        $this->gpsLon = $gpsLon;

        return $this;
    }

    /**
     * Get gpsLon
     *
     * @return float
     */
    public function getGpsLon()
    {
        return $this->gpsLon;
    }

    /**
     * Set orientation
     *
     * @param integer $orientation
     *
     * @return MediaFile
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;

        return $this;
    }

    /**
     * Get orientation
     *
     * @return integer
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * Set mediaFolder
     *
     * @param \AppBundle\Entity\MediaFolder $mediaFolder
     *
     * @return MediaFile
     */
    public function setMediaFolder(\AppBundle\Entity\MediaFolder $mediaFolder = null)
    {
        $this->mediaFolder = $mediaFolder;

        return $this;
    }

    /**
     * Get mediaFolder
     *
     * @return \AppBundle\Entity\MediaFolder
     */
    public function getMediaFolder()
    {
        return $this->mediaFolder;
    }
    /**
     * @var string
     */
    private $previewFileName;


    /**
     * Set previewFileName
     *
     * @param string $previewFileName
     *
     * @return MediaFile
     */
    public function setPreviewFileName($previewFileName)
    {
        $this->previewFileName = $previewFileName;

        return $this;
    }

    /**
     * Get previewFileName
     *
     * @return string
     */
    public function getPreviewFileName()
    {
        return $this->previewFileName;
    }
}
