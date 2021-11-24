<?php
    $servername = "jtb9ia3h1pgevwb1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $username = "vc0joyk2i5uoqwn2";
    $password = "jhm7wtp89jy1nzt2";
    $dbname = "ozmxv751nx7f9n4v";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>