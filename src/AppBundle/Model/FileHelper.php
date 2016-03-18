<?php

namespace AppBundle\Model;


class FileHelper
{

    /**
     * @param $options
     * @return array|mixed|string
     */
    static function findFiles($options)
    {
        $path = preg_replace('/\/+/uis', '/', $options['path']);

        # Some findFiles-Implementations require trailing slash, some dont. Add always, remove later.
        $cmd = 'find ' . $path . '/ -type f -print0';

        $output = shell_exec($cmd);
        $output = preg_replace('/\/+/uis', '/', $output);
        $output = explode(chr(0), $output);
        unset($output[count($output) - 1]);
        return $output;
    }

    static function rm_rf($target)
    {
        if (is_file($target)) {
            unlink($target);
            return;
        }

        $files = glob($target . '/*');
        foreach ($files as $file) {
            FileHelper::rm_rf($file);
        }
        rmdir($target);
        return;

    }

    static function mkdir_p($dir) {
        if(!is_dir($dir)){
            mkdir($dir, 0777, true);
        }
    }

}
