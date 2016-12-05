<?php 
    require("../config.php");
    $soluongBTC = $_POST['buy_quantity'];
    $btclink = $_POST['buy_btclink'];
    $buy_bank = $_POST['buy_bank'];
    $buy_name = $_POST['buy_name'];
    $buy_phone = $_POST['buy_phone'];
    echo "<script>window.location.replace('../views/buybtc.php?quantity=$soluongBTC&btclink=$btclink&bank=$buy_bank&name=$buy_name&phone=$buy_phone')</script>";
?>