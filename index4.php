<?php
$virusFile = array(".htaccess.txt", "one", "two", "three");
$folderDir = array();



function ScanFileName($dir = "./")
{
   return scandir($dir);
}

function ScanVirus($a)
{
   for ($i = 0; $i < count($a); $i++) {
      if ($i != 0 && $i != 1) {
         if (is_dir($a[$i])) {
            global $folderDir;
            array_push($folderDir, realpath($a[$i]));
         } else {
            echo "This is file : " . $a[$i];
            echo "<br>";
         }
      }
   }
}


$a = ScanFileName();
print_r($a);
ScanVirus($a);

function RecFunction($a){
   foreach($a as $subFolderDir){
      $a = ScanFileName($subFolderDir);
      ScanVirus($a)
   }
}

RecFunction($folderDir);

?>