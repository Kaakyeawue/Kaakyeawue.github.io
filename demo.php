<?php
$FileName=$_FILES['fuResume']['name'];
$TmpName=$_FILES['fuResume']['tmp_name'];

move_uploaded_file($TmpName,$FileName);
echo("File uploaded Successfuly");

//redirecting back to home
header("Location: index.html");






?>

// see
"uploads/" .