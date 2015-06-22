<?php
// Example of accessing data for a newly uploaded file
$fileName = $_FILES["uploaded_file"]["02032013509.jpg"]; 
$fileTmpLoc = $_FILES["uploaded_file"]["C:\xampp\tmp\php9C5F"];
// Path and file name
$pathAndName = "newsportal/admin". "02032013509.jpg";
// Run the move_uploaded_file() function here
$moveResult = move_uploaded_file("C:\xampp\tmp\php9C5F", "newsportal/admin");
?>