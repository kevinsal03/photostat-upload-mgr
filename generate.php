<?php
require 'config.php';

#create new file upload point
$objUUID = uniqid($env . "_");
$objStatus = true;

#echo($objUUID);
#echo("<br />");

$data = [
  "uuid"=>$objUUID,
  "status"=>$objStatus
];

$sql = "INSERT INTO " . $env . " (uuid, active, `created-at`)
VALUES ('" . $objUUID . "', true, NOW())";

if ($conn->query($sql) === true){
  #finally geneate the JSON object to return to client
  echo(json_encode($data));
} else {
  echo("Failed to update databse! Err: " . $conn->error;)
}

#echo($sql);
#echo("<br />");



 ?>
