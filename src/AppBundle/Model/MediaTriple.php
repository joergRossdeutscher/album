<?php
/**
 * Class MediaTriple
 */

namespace AppBundle\Model;

class MediaTriple
{

    public $mediaDrivePath = null;
    public $mediaFolderPath = null;
    public $mediaFileName = null;

    public function __construct($mediaAlbumBasePath, $filePath)
    {
        $this->initTripleFromFilePath($mediaAlbumBasePath, $filePath);
    }

    public function initTripleFromFilePath($mediaAlbumBasePath, $filePath)
    {
        if(substr($filePath,0,strlen($mediaAlbumBasePath)) != $mediaAlbumBasePath) {
            throw new Exception('Can\'t create kafkaesk triple');
        }

        $this->mediaDrivePath = $mediaAlbumBasePath;
        $pathInfo = pathinfo($filePath);
        $this->mediaFolderPath = (string)substr($pathInfo['dirname'], strlen($mediaAlbumBasePath));
        $this->mediaFileName = $pathInfo['basename'];
        return $this;
    }

}
