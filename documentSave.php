<?php

echo "N!@!#!#@$!y!\n";

if (isset($_POST['dataArray'])){
    $dbhost = 'www.example.com';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    if(! $conn ){
        die('Could not connect: ' . mysql_error());
    } else{
        echo "N!@!#!#@$!y!\n";
    }

    $postDatas = $_POST['dataArray'];

    foreach($postDatas as $postData) {
        $lastName = $postData['lastName'];
    }

    $sql =  "INSERT INTO info (Name) VALUES ({$lastName});";
    
    
    mysql_select_db('myDB');
    $success = mysql_query($sql, $conn);

    if (! $success){
        die('could not enter data: ' . mysql_error());
    } 

    echo "New record created successfully!\n";
    
    $conn -> close();
}


?>