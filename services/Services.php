<?php

require_once('DbConnection.php');
class Services
{
    function getModels() {
        $mysqli = new DbConnection();
        $models = array();
        if ($result = mysqli_query($mysqli->getdbconnect(), "SELECT * FROM model")) {
            while($tmp = $result->fetch_assoc()) {
                $models [] = $tmp;
            }
            $result->close();
        }
        return $models;
    }
}
?>

}