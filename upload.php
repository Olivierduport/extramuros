<?php

//Get the uploaded file information
$name_of_uploaded_file =
    basename($_FILES['uploaded_file']['name']);

//get the file extension of the file
$type_of_uploaded_file =
    substr($name_of_uploaded_file,
    strrpos($name_of_uploaded_file, '.') + 1);

$size_of_uploaded_file =
    $_FILES["uploaded_file"]["size"]/1024;//size in KBsen été uploadé";


?>