<?php
namespace App;

use ZipArchive;

class UnzipFiles {

  /**
   * __construct
   *
   * @param  mixed $file
   * @param  mixed $folder
   * @return void
   */
  public function __construct(public string $file, public string $folder){}

  /**
   * unzip_files
   *
   * @return void
   */
  public function unzip_files(): void {
    $zip = new ZipArchive();
    if ($zip->open($this->file) === TRUE) {
      $zip->extractTo(__DIR__ . DIRECTORY_SEPARATOR . $this->folder);
      $zip->close();
      echo 'ok';
    }
  }
}
