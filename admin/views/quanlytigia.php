<?php require("../header.php");?>
<?php 
    require("../models/capnhatgia.php");
    $taikhoan = $_SESSION['user'];
    $costDetail = getCostDetail();
?>
<!-- Add end models -->
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header orange-color">
                            Điều chỉnh tỷ giá
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <form class="form-horizontal" action="../models/capnhatgia.php" method="POST">
                                        <input type="hidden" name="rate_id" value="<?php echo $costDetail['rate_id'];?>"/>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Giá gốc:</label>
                                            <div class="col-sm-9 input-group">
                                              <input type="text" class="form-control" name="giagoc" value="<?php echo $costDetail['rate_root'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">% bán ra:</label>
                                            <div class="col-sm-9 input-group">
                                              <input type="text" class="form-control" name="banra" value="<?php echo $costDetail['rate_sell'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">% mua vào:</label>
                                            <div class="col-sm-9 input-group">
                                              <input type="text" class="form-control" name="muavao" value="<?php echo $costDetail['rate_buy'];?>">
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
    $("input[name='giagoc']").keypress(function(e){
        if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
    });
    $("input[name='banra']").keypress(function(e){
        if (String.fromCharCode(e.keyCode).match(/[^0-9\.]/g)) return false;
    });
    $("input[name='muavao']").keypress(function(e){
        if (String.fromCharCode(e.keyCode).match(/[^0-9\.]/g)) return false;
    });
</script>
