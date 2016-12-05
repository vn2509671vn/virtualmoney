<?php 
    require("../../config.php");
    function isExist($taikhoan){
        $sql = "select * from user where user_taikhoan = '$taikhoan'";
        $query = mysql_query($sql);
        $rows = mysql_num_rows($query);
        if($rows > 0){
            return true;
        }
        else {
            return false;
        }
    }
    
    function getUserDetail($taikhoan){
        $sql = "select * from user where user_taikhoan = '$taikhoan'";
        $query = mysql_query($sql);
        return mysql_fetch_array($query);
    }
    
    if(isset($_POST['submit'])){
        $hoten = $_POST['hoten'];
        $sdt = $_POST['sdt'];
        $cmnd = $_POST['cmnd'];
        $slbtc = $_POST['slbtc'];
        $tienmat = $_POST['tienmat'];
        $tkbank = $_POST['tkbank'];
        $btclink = $_POST['btclink'];
        $taikhoan = $_POST['taikhoan'];
        $matkhau = $_POST['matkhau'];
        
        $isExist = isExist($taikhoan);
        if($isExist){
            $sql = "update user 
            set user_btclink='$btclink', 
            user_hoten='$hoten', 
            user_sdt='$sdt', 
            user_cmnd='$cmnd', 
            user_soluongbtc='$slbtc', 
            user_tienmat='$tienmat', 
            user_banknumber='$tkbank',
            user_taikhoan='$taikhoan',
            user_matkhau='$matkhau'";
        }
        else {
            $sql = "insert into user(user_btclink, user_hoten, user_sdt, user_cmnd, user_soluongbtc, user_tienmat, user_banknumber, user_taikhoan, user_matkhau)  
            values('$btclink', '$hoten', '$sdt', '$cmnd', '$slbtc', '$tienmat', '$tkbank', '$taikhoan', '$matkhau')";
        }
        
        $query = mysql_query($sql);
        if($query){
            echo '<script type="text/javascript">alert("LƯU THÀNH CÔNG!!!");window.location.replace("../views/index.php");</script>';
        }
        else {
            echo '<script type="text/javascript">alert("LƯU THẤT BẠI!!!");window.location.replace("../views/index.php");</script>';
        }
    } 
?>