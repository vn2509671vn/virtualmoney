<?php 
    require("../config.php");
    date_default_timezone_set('Asia/Bangkok');
    $datetime = new DateTime();
    $curDate = $datetime->format('Y-m-d H:i:s');
    $soluong = $_POST['sell_quantity'];
    $tongtien = 15000000 * $soluong;
    $tk_nganhang = $_POST['sell_banking'];
    $hash = $_POST['urlbtc'];
    $sdt = $_POST['sdt'];
    $vibtc = $_POST['vibtc'];
    $hoten = $_POST['hoten'];
    $magiaodich = $_POST['magiaodich'];
    
    $sql = "insert into rootbuy(
    rootbuy_ngaytao, 
    rootbuy_bankaccount_nguoiban, 
    rootbuy_mahash_nguoiban, 
    rootbuy_soluongban, 
    rootbuy_tongtien, 
    rootbuy_status,  
    rootbuy_sdt_nguoiban,
    rootbuy_vibtc_nguoiban, 
    rootbuy_hoten_nguoiban, 
    rootbuy_magiaodich) 
    values ('$curDate', '$tk_nganhang', '$hash', $soluong, $tongtien, 'waiting', '$sdt', '$vibtc', '$hoten', '$magiaodich')";
    
    $query = mysql_query($sql);
    if($query){
        echo '<script type="text/javascript">alert("XÁC NHẬN THÀNH CÔNG!!! CHÚNG TÔI SẼ GỬI SMS VÀO SỐ ĐIỆN THOẠI CỦA BẠN KHI GIAO DỊCH HOÀN TẤT");window.location.replace("../views/index.php");</script>';
    }
    else {
        echo '<script type="text/javascript">alert("XÁC NHẬN THẤT BẠI!!!");window.location.replace("../views/index.php");</script>';
    }
?>