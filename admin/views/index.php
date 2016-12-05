<?php require("../header.php");?>
<?php 
    require("../models/capnhattaikhoan.php");
    $taikhoan = $_SESSION['user'];
    $userDetail = getUserDetail($taikhoan);
?>
<!-- Add end models -->
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header orange-color">
                            Thông tin cá nhân
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <form class="form-horizontal" action="../models/capnhattaikhoan.php" method="POST">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Tài khoản đăng nhập:</label>
                                            <div class="col-sm-9 input-group">
                                              <input type="text" class="form-control" name="taikhoan" value="<?php echo $userDetail['user_taikhoan'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Mật khẩu:</label>
                                            <div class="col-sm-9 input-group">
                                              <input type="password" class="form-control" name="matkhau" value="<?php echo $userDetail['user_matkhau'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Họ Tên:</label>
                                            <div class="col-sm-9 input-group">
                                              <input type="text" class="form-control" name="hoten" value="<?php echo $userDetail['user_hoten'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Số điện thoại:</label>
                                            <div class="col-sm-9 input-group">
                                              <input type="text" class="form-control" name="sdt" value="<?php echo $userDetail['user_sdt'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">CMND:</label>
                                            <div class="col-sm-9 input-group">
                                              <input type="text" class="form-control" name="cmnd" value="<?php echo $userDetail['user_cmnd'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Số lượng BTC:</label>
                                            <div class="col-sm-9 input-group">
                                              <input type="text" class="form-control" name="slbtc" value="<?php echo $userDetail['user_soluongbtc'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Địa chỉ ví BTC:</label>
                                            <div class="col-sm-9 input-group">
                                              <input type="text" class="form-control" name="btclink" value="<?php echo $userDetail['user_btclink'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Tiền mặt:</label>
                                            <div class="col-sm-9 input-group">
                                              <input type="text" class="form-control" name="tienmat" value="<?php echo $userDetail['user_tienmat'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Tài khoản bank:</label>
                                            <div class="col-sm-9 input-group">
                                              <input type="text" class="form-control" name="tkbank" value="<?php echo $userDetail['user_banknumber'];?>">
                                            </div>
                                            <div class="col-sm-9 col-sm-offset-3">
                                                <p>Các tài khoản cách nhau bởi dấu chấm phẩy (;)</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9 input-group">
                                              <button type="submit" class="btn btn-primary" name="submit">Lưu</button>
                                            </div>
                                        </div>
                                    </form>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>
<script type="text/javascript">
    selectorMenu("bangdieukhien");
    $("input[name='sdt']").keypress(function(e){
        if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
    });
    $("input[name='cmnd']").keypress(function(e){
        if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
    });
    $("input[name='slbtc']").keypress(function(e){
        if (String.fromCharCode(e.keyCode).match(/[^0-9\.]/g)) return false;
    });
    $("input[name='tienmat']").keypress(function(e){
        if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
    });
</script>
