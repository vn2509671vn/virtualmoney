<!-- Add start Header-->
<?php require("../header.php");?>
<!-- Add end Header-->
<?php 
    $quantity = "";
    $taikhoan = "";
    $bank = "";
    $name = "";
    $quantity = $_GET['quantity'];
    $btclink = $_GET['btclink'];
    $bank = $_GET['bank'];
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $tigia = $rateDetail['rate_root'] + ($rateDetail['rate_root']*$rateDetail['rate_sell']/100);
    $tongtiennhan = $quantity*$tigia;
    $noidungchuyentien = date("YmdHis");
?>
<!-- Middle Content -->
<div class="col-md-8">
  <div class="panel panel-primary">
    <div class="panel-heading text-center">Xác Nhận Thông Tin Người Mua</div>
    <div class="panel-body">
      <div class="col-md-12">
        <form class="form-horizontal" action="../models/xacnhanmua.php" method="POST">
            <input type="hidden" class="form-control" name="buy_quantity" value="<?php echo $quantity;?>">
            <input type="hidden" class="form-control" name="buy_btclink" value="<?php echo $btclink;?>">
            <input type="hidden" class="form-control" name="noidungchuyentien" value="<?php echo $noidungchuyentien;?>">
            <input type="hidden" class="form-control" name="buy_banking" value="<?php echo $bank;?>">
            <input type="hidden" class="form-control" name="hoten" value="<?php echo $name;?>">
            <input type="hidden" class="form-control" name="sdt" value="<?php echo $phone;?>">
            <input type="hidden" class="form-control" name="magiaodich" value="<?php echo $noidungchuyentien;?>">
            <input type="hidden" class="form-control" name="mybank" value="<?php echo $mybank;?>">
            <div class="form-group">
                <label class="control-label col-sm-3">Mã giao dịch:</label>
                <div class="col-sm-9 input-group">
                  <input type="text" class="form-control" readonly value="<?php echo $noidungchuyentien;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Họ tên của bạn:</label>
                <div class="col-sm-9 input-group">
                  <input type="text" class="form-control" readonly value="<?php echo $name;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Tài khoản ngân hàng của bạn:</label>
                <div class="col-sm-9 input-group">
                  <input type="text" class="form-control" readonly value="<?php echo $bank;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">SDT của bạn:</label>
                <div class="col-sm-9 input-group">
                  <input type="text" class="form-control" readonly value="<?php echo $phone;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Địa chỉ ví của bạn:</label>
                <div class="col-sm-9 input-group">
                  <input type="text" class="form-control" readonly value="<?php echo $btclink;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Số lượng BTC mua:</label>
                <div class="col-sm-9 input-group">
                  <input type="text" class="form-control" readonly value="<?php echo $quantity;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Tỉ giá:</label>
                <div class="col-sm-9 input-group">
                  <input type="text" class="form-control" readonly value="<?php echo $tigia;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Số tiền phải trả:</label>
                <div class="col-sm-9 input-group">
                  <input type="text" class="form-control" readonly value="<?php echo $tongtiennhan;?>">
                  <span class="input-group-addon">VNĐ</span>
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
  $("input[name='sdt']").keypress(function(e){
    if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
  });
  
  $("input[name='cmnd']").keypress(function(e){
    if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
  });
  
  $(document).ready(function(){
    $("#huongdangd").show();
    $("#noidungchuyenkhoan").text("<?php echo $noidungchuyentien;?>");
    $("#sotienchuyen").text("<?php echo $tongtiennhan;?>");
  });
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
