<?php
Class DbConnection{
    function getdbconnect(){
        $conn = mysqli_connect('localhost', 'root', '111', 'nissan') or die("Couldn't connect");
        return $conn;
    }
}
?>