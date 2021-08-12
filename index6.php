<?php

function ScanArrayReturn($dir){
   $a = scandir($dir);
   $folderDir = array();
   for ($i = 0; $i < count($a); $i++) {
      if ($i != 0 && $i != 1) {
         if (is_dir($a[$i])) {
            array_push($folderDir, $dir.$a[$i]);
            echo realpath($a[$i])."<br>";
         } else {
            //echo "File : " . $dir."/".$a[$i]. "<br>";
         }
      }
   }
   echo "shyam<br>"; print_r($folderDir);
   if(count($folderDir)>0){
      foreach($folderDir as $newDir){
         ScanArrayReturn($newDir."/");
      }
   }
}












ScanArrayReturn("./");

?>