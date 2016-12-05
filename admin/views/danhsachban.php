<!-- Add start Header-->
<?php require("../header.php");?>
<!-- Add end Header-->
<!-- Add start Models-->
<?php 
    require("../models/giaodich.php");
    $getList = danhsachban();
    if(!$getList || mysql_num_rows($getList) == 0){
        $rowList = 0;
    }
    else {
        $rowList = 1;
    }
?>
<!-- Add end models -->
<!-- Add end Header-->
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header orange-color">
                            Danh sách người bán
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive padding-top-10">
                                    <table id="table-user" class="table table-striped table-bordered table-full-width" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>CREATE DATE</th>
                                                <th>SDT</th>
                                                <th>BANK ACCOUNT</th>
                                                <th>BTC ADDRESS</th>
                                                <th>BTC CODE</th>
                                                <th>QUANTITY</th>
                                                <th>AMOUNT</th>
                                                <th>STATUS</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php if ($rowList == 0){?>
                                                    <tr><td colspan="10" class="text-center">No item</td></tr>
                                            <?php }else{?>
                                                <?php $iSTT = 1;?>
                                                <?php while($item = mysql_fetch_array($getList)){?>
                                                <tr>
                                                    <td><?php echo $iSTT;?></td>
                                                    <td><?php echo $item['rootbuy_ngaytao'];?></td>
                                                    <td><?php echo $item['rootbuy_sdt_nguoiban'];?></td>
                                                    <td><?php echo $item['rootbuy_bankaccount_nguoiban'];?></td>
                                                    <td><?php echo $item['rootbuy_vibtc_nguoiban'];?></td>
                                                    <td><?php echo $item['rootbuy_mahash_nguoiban'];?></td>
                                                    <td><?php echo $item['rootbuy_soluongban'];?></td>
                                                    <td><?php echo $item['rootbuy_tongtien'];?></td>
                                                    <td><?php echo $item['rootbuy_status'];?></td>
                                                    <td><button type="button" class="btn btn-success btn-sm" onclick="xacnhan(<?php echo $item['rootbuy_id'];?>)">Xác nhận</button></td>
                                                    <?php $iSTT++;?>
                                                </tr>
                                                <?php }?>
                                            <?php }?>
                                        </tbody>
                                    </table>
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
    function xacnhan(ID){
        var rootbuy_id = ID;
        $.ajax({
                url:"../models/giaodich.php", 
                method:"post",  
                data:{
                    action: 'xacnhanmua',
                    ID: rootbuy_id
                },  
                dataType:"text",  
                success:function(data)  
                {  
                    if(data){
                        window.location.reload();
                    }
                    else {
                        alert("Có lỗi phát sinh!!! Vui lòng liên hệ admin");
                    }
                }  
            });
    }
    selectorMenu("danhsachban");
    $('#table-user').DataTable({
        "searching": true,
        "info": true,
    });
</script>