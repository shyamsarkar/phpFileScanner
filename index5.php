<?php
$folderDir = array();




function ScanArrayReturn($dir){
   $a = scandir($dir);
   // unset($folderDir);
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
   return $folderDir;
}







$myArr = ScanArrayReturn("./");
if(count($myArr)>0){
   foreach($myArr as $dir){
      ScanArrayReturn($dir);
   }
}
