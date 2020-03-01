<?php
error_reporting(E_ERROR | E_PARSE);
$readHouses = readline();
$houses = explode("@", $readHouses);
$readCommand = "";
$position = 0;
while(true){
  $readCommand = readline();
  if($readCommand == "Love!"){
    break;
  }
  $command = explode(" ", $readCommand);
  $position += $command[1];
  
  if($position > count($houses)-1){
    $position = 0;
  }
  if($houses[$position] != 0){
    
  
  $houses[$position] -= 2;
  if($houses[$position] == 0){
    echo "Place ${position} has Valentine's day.";
    echo "\n";
  }
  }else {
    echo "Place ${position} already had Valentine's day.";
    echo "\n";
  }
}
echo "Cupid's last position was ${position}.";
echo "\n";
$succHouses = 0;
for($i = 1; $i < count($houses); $i++){
  if($houses[$i] == 0){
    $succHouses++;
  }
}

if($succHouses == count($houses)){
  echo "Mission was sucessful.";
  echo "\n";
}else {
  $failHouses = count($houses) - $succHouses;
  echo "Cupid has failed ${failHouses} places.";
  echo "\n";
}

echo "\n";
