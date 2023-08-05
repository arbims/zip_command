<?php

namespace App;

use App\zipFiles;
use App\unzipFiles;

class Main
{
    /**
     * main
     *
     * @param  mixed $files
     * @return void
     */
    function main($argv)
    {
        if ($argv[1] == '-u') {
            $file = $argv[2];
            $folder = $argv[3];
            $unzipFiles = new UnzipFiles($file, $folder);
            $unzipFiles->unzip_files();
        } else {
            $files = $argv;
            $zipfileName = end($files);
            array_pop($files);
            $zipfiles = new ZipFiles($files, $zipfileName);
            $zipfiles->zip_file();
        }
    }
}
