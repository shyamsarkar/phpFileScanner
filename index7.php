<?php
$path = "./";
$folderDir = array();
$availableDir = FALSE;
$dir = new DirectoryIterator($path);
foreach ($dir as $fileinfo) {
   //  if ($fileinfo->isDir() && !$fileinfo->isDot()) {
   //      echo $fileinfo->getFilename().'<br>';
   //      $availableDir = TRUE;
   //  }
   print_r($fileinfo->getFilename()."<br>");
}





?>