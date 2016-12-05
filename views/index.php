<!-- Add start Header-->
<?php require("../header.php");?>
<!-- Add end Header-->
<!-- Middle Content -->
<div class="col-md-8">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#sell"><b>BÁN</b></a></li>
    <li><a data-toggle="tab" href="#buy"><b>MUA</b></a></li>
  </ul>
  <div class="tab-content">
    <div id="sell" class="tab-pane fade in active">
        <h3 class="color-orange">BÁN BTC</h3>
        <form class="form-horizontal" action="../models/sellbtc.php" method="POST">
          <div class="form-group">
            <label class="control-label col-sm-3">Số lượng BTC bán:</label>
            <div class="col-sm-9 input-group">
              <input type="text" class="form-control" name="sell_quantity" placeholder="e.g.: 10" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Số tài khoản nhận tiền:</label>
            <div class="col-sm-9 input-group">
              <input type="text" class="form-control" name="sell_banking" placeholder="Enter bank account" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Số điện thoại:</label>
            <div class="col-sm-9 input-group">
              <input type="text" class="form-control" name="sdt" placeholder="Enter Phone number" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Ví BTC:</label>
            <div class="col-sm-9 input-group">
              <input type="text" class="form-control" name="btc" placeholder="Enter BTC" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Họ Tên Khách Hàng:</label>
            <div class="col-sm-9 input-group">
              <input type="text" class="form-control" name="hoten" placeholder="Enter Full name" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Số tiền nhận:</label>
            <div class="col-sm-9 input-group">
              <input type="text" class="form-control" name="sell_receive" readonly>
              <span class="input-group-addon">VNĐ</span>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Chúng tôi còn:</label>
            <div class="col-sm-9 input-group">
              <input type="text" class="form-control" name="totalmoney" readonly value="<?php echo number_format($userDetail['user_tienmat'], 0, '', '.');?>">
              <span class="input-group-addon">VNĐ</span>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9 input-group">
              <button type="submit" class="btn btn-primary">Tiếp tục</button>
            </div>
          </div>
        </form>
        <div class="divider"></div>
        <div class="panel-body">
          <h5 class="lg-title">
            <strong>Hướng dẫn giao dịch:</strong>
          </h5>
          <ul style="list-style-type:disc">
            <li>Nhập số lượng BTC muốn bán</li>
            <li>Điền số tài khoản ngân hàng VCB </li>
            <li>Bấm vào nút "Tiếp tục"</li>
            <li>Đăng nhập và thanh toán bằng tài khoản BTC của bạn</li>
            <li>Hệ thống sẽ chuyển tiền cho bạn trong giây lát</li>
          </ul>
          <h5 class="lg-title">
            <strong>Chú ý:</strong>
          </h5>
          <ul style="list-style-type:disc">
            <li>Tuyệt đối không đưa link đơn hàng cho người khác.</li>
          </ul>
        </div>
    </div>
    <div id="buy" class="tab-pane fade">
        <h3 class="color-orange">MUA BTC</h3>
        <form class="form-horizontal" action="../models/buybtc.php" method="POST">
          <div class="form-group">
            <label class="control-label col-sm-3">Chúng tôi còn:</label>
            <div class="col-sm-9 input-group">
              <input type="text" class="form-control" value="<?php echo $userDetail['user_soluongbtc'];?>" readonly>
              <span class="input-group-addon">BTC</span>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Số lượng cần mua:</label>
            <div class="col-sm-9 input-group">
              <input type="text" class="form-control" name="buy_quantity" placeholder="e.g.: 10" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Số tiền cần trả:</label>
            <div class="col-sm-9 input-group">
              <input type="text" class="form-control" name="buy_provide" readonly>
              <span class="input-group-addon">VNĐ</span>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Địa chỉ BTC của bạn:</label>
            <div class="col-sm-9 input-group">
              <input type="text" class="form-control" name="buy_btclink" placeholder="Enter address" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Tài khoản ngân hàng của bạn:</label>
            <div class="col-sm-9 input-group">
              <input type="text" class="form-control" name="buy_bank" placeholder="Enter bank address" required="required">
            </div>
            <div class="col-sm-9 col-sm-offset-3">
              <p class="color-orange">Chỉ thanh toán qua VietcomBank &nbsp&nbsp&nbsp<img src="../images/icon-vcbank.jpg" width="100"></img></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Họ tên của bạn:</label>
            <div class="col-sm-9 input-group">
              <input type="text" class="form-control" name="buy_name" placeholder="Enter full name" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">SDT của bạn:</label>
            <div class="col-sm-9 input-group">
              <input type="text" class="form-control" name="buy_phone" placeholder="Enter phone number" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9 input-group">
              <button type="submit" class="btn btn-primary" name="submit">Tiếp tục</button>
            </div>
          </div>
        </form>
        <div class="divider"></div>
        <div class="panel-body">
          <h5 class="lg-title">
            <strong>Hướng dẫn giao dịch:</strong>
          </h5>
          <ul style="list-style-type:disc">
            <li>Nhập số ví BTC của người nhận</li>
            <li>Nhập số lượng BTC muốn mua</li>
            <li>Bấm vào nút "Tiếp tục"</li>
            <li>Gửi tiền theo hướng dẫn</li>
            <li>Hệ thống sẽ chuyển BTC cho bạn trong giây lát</li>
          </ul>
          <h5 class="lg-title">
            <strong>Chú ý:</strong>
          </h5>
          <ul style="list-style-type:disc">
            <li>Tuyệt đối không đưa link đơn hàng cho người khác.</li>
          </ul>
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
  $("input[name='sell_quantity']").keypress(function(e){
    if (String.fromCharCode(e.keyCode).match(/[^0-9\.]/g)) return false;
  });
  $("input[name='sdt']").keypress(function(e){
    if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
  });
  $("input[name='buy_phone']").keypress(function(e){
    if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
  });
  $("input[name='sell_quantity']").change(function(e){
    var quantity = $(this).val();
    var giaBTC = <?php echo ($rateDetail['rate_root'] + $rateDetail['rate_root']*$rateDetail['rate_buy']/100)?>;
    var tongtien = quantity*giaBTC;
    $("input[name='sell_receive']").val(tongtien);
  });
  
  $("input[name='buy_quantity']").keypress(function(e){
    if (String.fromCharCode(e.keyCode).match(/[^0-9\.]/g)) return false;
  });
  $("input[name='buy_quantity']").change(function(e){
    var quantity = $(this).val();
    var giaBTC = <?php echo ($rateDetail['rate_root'] + $rateDetail['rate_root']*$rateDetail['rate_sell']/100)?>;
    var tongtien = quantity*giaBTC;
    $("input[name='buy_provide']").val(tongtien);
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
