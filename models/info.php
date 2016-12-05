<?php 
    require("../config.php");
    $guid = "7e44e37e-6a40-430d-ad68-2c644b2ca3be";
    $address = "13TmS3V6R3eZHYuFwyhECNcFii7SdJ3R2y";
    $PW = "Tntn1314520";
    
    function getUserAdmin(){
        $sql = "select * from user";
        $query = mysql_query($sql);
        return mysql_fetch_array($query);
    }
    
    function getRate(){
        $sql = "select * from rate";
        $query = mysql_query($sql);
        return mysql_fetch_array($query);
    }
?>