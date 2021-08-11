<?php
$dir = "./";
$a = scandir($dir);
$virusFile = array(".htaccess.txt", "one", "two", "three");

// $realPath = realpath($a[2]);
// print_r($realPath);

for ($i = 0; $i < count($a); $i++) {
   if ($i != 0 && $i != 1) {
      foreach ($virusFile as $virus) {
         if ($a[$i] == $virus) {
            $VirusPathFile = fopen("virus_backup.txt", "a+");
            $txt = realpath($a[$i])."\n";
            fwrite($VirusPathFile, $txt);
         }
      }
   }
}
fclose($VirusPathFile);

?>