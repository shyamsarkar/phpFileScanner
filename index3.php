<?php
$dir = "./";
$a = scandir($dir);
$virusFile = array(".htaccess.txt", "one", "two", "three");
$folderDir = array();

// To get folder Name

for ($i = 0; $i < count($a); $i++) {
   if ($i != 0 && $i != 1) {
      if(is_dir($a[$i])){
         array_push($folderDir,realpath($a[$i]));
      }
      else{
         echo "This is file : ".$a[$i];
         echo "<br>";
      }
   }
}

echo "<br>";
print_r($folderDir);
echo "<br>";

foreach(array_reverse($folderDir) as $allFolder){
   echo $allFolder."<br>";
}

echo "<br>";
print_r($folderDir);
echo "<br>";
?>