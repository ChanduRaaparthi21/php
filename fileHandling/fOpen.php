<?php 

$myFile=fopen("readFile.txt","r") or die("Unable to open file!");

// echo fread($myFile,filesize("readFile.txt"));
// echo "<br>";


while( !feof($myFile) ) {
   echo fgets($myFile). "<br>";
}

fclose($myFile);

?>