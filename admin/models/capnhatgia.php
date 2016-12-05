<?php 
    require("../../config.php");
    function getCostDetail(){
        $sql = "select * from rate";
        $query = mysql_query($sql);
        return mysql_fetch_array($query);
    }
    
    if(isset($_POST['submit'])){
        $id = $_POST['rate_id'];
        $giagoc = $_POST['giagoc'];
        $rate_sell = $_POST['banra'];
        $rate_buy = $_POST['muavao'];
        $sql = "update rate set rate_sell = $rate_sell, rate_buy = $rate_buy, rate_root = $giagoc where rate_id = $id";
        $query = mysql_query($sql);
        if($query){
            echo '<script type="text/javascript">alert("LƯU THÀNH CÔNG!!!");window.location.replace("../views/quanlytigia.php");</script>';
        }
        else {
            echo '<script type="text/javascript">alert("LƯU THẤT BẠI!!!");window.location.replace("../views/quanlytigia.php");</script>';
        }
    }
?>