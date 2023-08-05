<?php
namespace App;

use ZipArchive;

class ZipFiles {

  /**
   * __construct
   *
   * @param  mixed $files Liste des fichier et dossier
   * @param  mixed $zipfileName nom de fichier de sortie extension .zip
   * @return void
   */
  public function __construct(public $files, public $zipfileName){}

  /**
   * creation d'un zip file en passant la listes des fichies et dossiers
   *
   * @return void
   */
  public function zip_file(): void {
    // creation instance ZipArchive
    $zip = new ZipArchive();

    if ($zip->open($this->zipfileName, ZipArchive::CREATE) === TRUE) {
      // parcouris liste des fichier
      for ($i = 1; $i < count($this->files); $i++) {
        $file = $this->files[$i];

        // si le fichier et un dossier appeller une fonctione zip dir
        // sinon ajouter le fichier dans le zip archive
        if (is_dir($file)) {
          $dir = $file;
          $this->zip_dir($zip, $dir);
        } else {
          $zip->addFile($file);
        }
      }
      // fermer l'instance
      $zip->close();
    }
  }

  /**
   * fonctione recursive pour archiver les dossier et les fichiers dans les dossiers
   *
   * @param  mixed $zip
   * @param  mixed $dir
   * @return void
   */
  public function zip_dir(ZipArchive $zip, string $dir): void {
    // creation d'un dossier vide avec le nom
    $zip->addEmptyDir($dir);
    $dh = opendir($dir);

    while ($d_file = readdir($dh)) {
      if ($d_file != '.' && $d_file != '..') {
        // verifier si c'est un fichier dans le dossier
        if (is_file($dir . DIRECTORY_SEPARATOR . $d_file)) {
          $zip->addFile($dir . DIRECTORY_SEPARATOR . $d_file);
        } else {
          // appelle recursive pour l'archive des dossier
          $dir_n = $dir . DIRECTORY_SEPARATOR . $d_file;
          $this->zip_dir($zip, $dir_n);
        }
      }
    }
    closedir($dh);
  }
}
