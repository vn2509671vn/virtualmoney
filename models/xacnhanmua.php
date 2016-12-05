<?php 
    require("../config.php");
    date_default_timezone_set('Asia/Bangkok');
    $datetime = new DateTime();
    $curDate = $datetime->format('Y-m-d H:i:s');
    $sdt = $_POST['sdt'];
    $nganhangnguoimua = $_POST['buy_banking'];
    $hotennguoimua = $_POST['hoten'];
    $diachivi = $_POST['buy_btclink'];
    $soluong = $_POST['buy_quantity'];
    $tongtien = 15000000 * $soluong;
    $noidungchuyentien = $_POST['noidungchuyentien'];
    $mybank = '123456789';
    $hoten = $_POST['hoten'];
    $magiaodich = $_POST['magiaodich'];
    
    $sql = "insert into rootsell(
    rootsell_ngaytao, 
    rootsell_sdt_nguoimua, 
    rootsell_bankaccount_nguoimua, 
    rootsell_diachivi_nguoimua, 
    rootsell_soluongmua, 
    rootsell_tongtien, 
    rootsell_machuyentien, 
    rootsell_status,
    rootsell_tknhantien, rootsell_hoten_nguoimua, rootsell_magiaodich) 
    values ('$curDate', '$sdt', '$nganhangnguoimua', '$diachivi', $soluong, $tongtien, '$noidungchuyentien', 'waiting', '$mybank', '$hoten', '$magiaodich')";
    
    $query = mysql_query($sql);
    if($query){
        echo '<script type="text/javascript">alert("XÁC NHẬN THÀNH CÔNG!!! CHÚNG TÔI SẼ GỬI SMS VÀO SỐ ĐIỆN THOẠI CỦA BẠN KHI GIAO DỊCH HOÀN TẤT");window.location.replace("../views/index.php");</script>';
    }
    else {
        echo '<script type="text/javascript">alert("XÁC NHẬN THẤT BẠI!!!");window.location.replace("../views/index.php");</script>';
    }
?>