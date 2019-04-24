<?php
require 'config.php';

/*create new file upload point*/

//gen the file UUID with prefix matching mode server is in
$objUUID = uniqid($env . "_");
$objStatus = true;

/* TODO
  * Add validation to prevent random people from generating upload point
  * Create directory for file to be stored in the $storage location
*/

#only used to generate JSON response
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
  echo("Error: " . $sql . "<br>" . $conn->error);
}


$conn->close();

 ?>
