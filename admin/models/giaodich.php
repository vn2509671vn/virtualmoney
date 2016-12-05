<?php
    require("../../config.php");
    function danhsachmua(){
        $sql = "select * from rootsell";
        return mysql_query($sql);
    }
    
    function danhsachban(){
        $sql = "select * from rootbuy";
        return mysql_query($sql);
    }
    
    function xacnhanban($id){
        $sql = "update rootsell set rootsell_status = 'confirmed' where rootsell_id = $id";    
        return mysql_query($sql);
    }
    
    function xacnhanmua($id){
        $sql = "update rootbuy set rootbuy_status = 'confirmed' where rootbuy_id = $id";    
        return mysql_query($sql);
    }
    
    if(isset($_POST['action'])){
        $action = $_POST['action'];
        if($action == 'xacnhanban'){
            $rootsell_id = $_POST['ID'];
            $result = xacnhanban($rootsell_id);
            if($result){
                echo 1;
            }
            else {
                echo 0;
            }
        }
        else if($action == 'xacnhanmua'){
            $rootbuy_id = $_POST['ID'];
            $result = xacnhanmua($rootbuy_id);
            if($result){
                echo 1;
            }
            else {
                echo 0;
            }
        }
    }
?>