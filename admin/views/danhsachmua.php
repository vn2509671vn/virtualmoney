<!-- Add start Header-->
<?php require("../header.php");?>
<!-- Add end Header-->
<!-- Add start Models-->
<?php 
    require("../models/giaodich.php");
    $getList = danhsachmua();
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
                            Danh sách người mua
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
                                                <th>CMND</th>
                                                <th>SDT</th>
                                                <th>BANK ACCOUNT</th>
                                                <th>BTC ADDRESS</th>
                                                <th>TRADE CODE</th>
                                                <th>QUANTITY</th>
                                                <th>AMOUNT</th>
                                                <th>STATUS</th>
                                                <th>MY BANK</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php if ($rowList == 0){?>
                                                    <tr><td colspan="12" class="text-center">No item</td></tr>
                                            <?php }else{?>
                                                <?php $iSTT = 1;?>
                                                <?php while($item = mysql_fetch_array($getList)){?>
                                                <tr>
                                                    <td><?php echo $iSTT;?></td>
                                                    <td><?php echo $item['rootsell_ngaytao'];?></td>
                                                    <td><?php echo $item['rootsell_cmnd_nguoimua'];?></td>
                                                    <td><?php echo $item['rootsell_sdt_nguoimua'];?></td>
                                                    <td><?php echo $item['rootsell_bankaccount_nguoimua'];?></td>
                                                    <td><?php echo $item['rootsell_diachivi_nguoimua'];?></td>
                                                    <td><?php echo $item['rootsell_machuyentien'];?></td>
                                                    <td><?php echo $item['rootsell_soluongmua'];?></td>
                                                    <td><?php echo $item['rootsell_tongtien'];?></td>
                                                    <td><?php echo $item['rootsell_status'];?></td>
                                                    <td><?php echo $item['rootsell_tknhantien'];?></td>
                                                    <td><button type="button" class="btn btn-success btn-sm" onclick="xacnhan(<?php echo $item['rootsell_id'];?>)">Xác nhận</button></td>
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
        var rootsell_id = ID;
        $.ajax({
                url:"../models/giaodich.php", 
                method:"post",  
                data:{
                    action: 'xacnhanban',
                    ID: rootsell_id
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
    selectorMenu("danhsachmua");
    $('#table-user').DataTable({
        "searching": true,
        "info": true,
    });
</script>