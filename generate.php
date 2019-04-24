<?php
require 'config.php';

#create new file upload point
$objUUID = uniqid($env . "_");
$objStatus = true;

echo($objUUID);
echo("<br />");

$data = [
  "uuid"=>$objUUID,
  "status"=>$objStatus
];

$sql = "INSERT INTO " . $env . " (uuid, active, `created-at`)
VALUES ('" . $objUUID . "'," . $objStatus . ", 'NOW()')";

echo($sql);
echo("<br />");


#finally geneate the JSON object to return to client
echo(json_encode($data));

 ?>
