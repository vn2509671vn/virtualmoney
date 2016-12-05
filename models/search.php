<?php 
    require("../config.php");
    
    function searchForUserSell($txtSearch){
        $sql = "select * from rootbuy where rootbuy_magiaodich = '$txtSearch'";
        $query = mysql_query($sql);
        return mysql_fetch_array($query);
    }
    
    function searchForUserBuy($txtSearch){
        $sql = "select * from rootsell where rootsell_magiaodich = '$txtSearch'";
        $query = mysql_query($sql);
        return mysql_fetch_array($query);
    }
    
    if(isset($_POST['magiaodich'])){
        $magiaodich = $_POST['magiaodich'];
        $loaigiaodich = $_POST['loaigd'];
        $output = "";
        if($loaigiaodich == "sell"){
            $output = searchForUserSell($magiaodich);
        }
        else {
            $output = searchForUserBuy($magiaodich);
        }
        echo json_encode($output);
    }
?>