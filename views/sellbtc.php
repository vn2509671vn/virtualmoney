<!-- Add start Header-->
<?php require("../header.php");?>
<!-- Add end Header-->
<?php 
    $myBTC = $userDetail['user_btclink'];
    $quantity = "";
    $taikhoan = "";
    $sdt = "";
    $vibtc = "";
    $hoten = "";
    $magiaodich = "";
    $quantity = $_GET['quantity'];
    $taikhoan = $_GET['taikhoan'];
    $sdt = $_GET['sdt'];
    $vibtc = $_GET['vibtc'];
    $hoten = $_GET['hoten'];
    $magiaodich = date("YmdHis");
    $tigia = $rateDetail['rate_root'] + ($rateDetail['rate_root']*$rateDetail['rate_buy']/100);
    $tongtiennhan = $quantity*$tigia;
?>
<!-- Middle Content -->
<div class="col-md-8">
  <div class="panel panel-primary">
    <div class="panel-heading text-center">Xác Nhận Thông Tin Người Bán</div>
    <div class="panel-body">
      <div class="col-md-12">
        <form class="form-horizontal" action="../models/xacnhanban.php" method="POST">
            <input type="hidden" class="form-control" name="sell_quantity" value="<?php echo $quantity;?>">
            <input type="hidden" class="form-control" name="sell_banking" value="<?php echo $taikhoan;?>">
            <input type="hidden" class="form-control" name="sdt" value="<?php echo $sdt;?>">
            <input type="hidden" class="form-control" name="vibtc" value="<?php echo $vibtc;?>">
            <input type="hidden" class="form-control" name="hoten" value="<?php echo $hoten;?>">
            <input type="hidden" class="form-control" name="magiaodich" value="<?php echo $magiaodich;?>">
            <div class="form-group">
                <label class="control-label col-sm-3">Mã giao dịch:</label>
                <div class="col-sm-9 input-group">
                  <input type="text" class="form-control" readonly value="<?php echo $magiaodich;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Số lượng BTC bán:</label>
                <div class="col-sm-9 input-group">
                  <input type="text" class="form-control" readonly value="<?php echo $quantity;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Số tài khoản nhận tiền:</label>
                <div class="col-sm-9 input-group">
                  <input type="text" class="form-control" readonly value="<?php echo $taikhoan;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Tên khách hàng:</label>
                <div class="col-sm-9 input-group">
                  <input type="text" class="form-control" readonly value="<?php echo $hoten;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Số điện thoại:</label>
                <div class="col-sm-9 input-group">
                  <input type="text" class="form-control" readonly value="<?php echo $sdt;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Số tiền nhận:</label>
                <div class="col-sm-9 input-group">
                  <input type="text" class="form-control" readonly value="<?php echo $tongtiennhan;?>">
                  <span class="input-group-addon">VNĐ</span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Nhập URL chuyển BTC (Transaction Hash):</label>
                <div class="col-sm-9 input-group">
                  <input type="text" class="form-control" name="urlbtc" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Hướng dẫn giao dịch: </label>
                <div class="col-sm-9">
                  <img src="<?php echo "https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=" . $myBTC . "&choe=UTF-8";?>" alt="Smiley face" height="200" width="200">
                  <p class="color-orange">Vui lòng chuyển đúng <strong class="color-black"><?php echo $quantity;?> Bitcoins</strong> vào địa chỉ</p>
                  <p><strong><?php echo $myBTC;?></strong></p>
                  <div>
                    Sau đó nhập vào mã giao dịch bitcoin vào ô Nhập URL chuyển BTC (Transaction Hash).
                  </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9 input-group">
                  <button type="submit" class="btn btn-primary" name="submit">Hoàn tất</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Middle Content-->
<!-- Add start Side right-->
<?php require("../side-right.php");?>
<!-- Add end Side right-->
<script type="text/javascript">
  $("#huongdangd").hide();
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/583b01138a20fc0cac48fd70/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
