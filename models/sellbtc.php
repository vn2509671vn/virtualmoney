<?php 
    require("../config.php");
    $soluongBTC = $_POST['sell_quantity'];
    $taikhoanBank = $_POST['sell_banking'];
    $sdt = $_POST['sdt'];
    $vibtc = $_POST['btc'];
    $hoten = $_POST['hoten'];
    echo "<script>window.location.replace('../views/sellbtc.php?quantity=$soluongBTC&taikhoan=$taikhoanBank&sdt=$sdt&vibtc=$vibtc&hoten=$hoten')</script>";
?>