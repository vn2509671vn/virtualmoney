<!-- Add start Header-->
<?php require("../header.php");?>
<!-- Add end Header-->
<?php 

?>
<!-- Middle Content -->
<div class="col-md-8">
  <div class="panel panel-primary">
    <div class="panel-heading text-center">Tra cứu giao dịch</div>
    <div class="panel-body">
      <div class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-sm-3">Loại giao dịch:</label>
            <div class="col-sm-9">
              <label class="radio-inline"><input type="radio" name="optradio" value="sell" checked>Bán BTC</label>
              <label class="radio-inline"><input type="radio" name="optradio" value="buy">Mua BTC</label>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3">Mã giao dịch:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="magiaodich">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
              <a class="btn btn-primary" id="search">Tìm</a>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12" id="ketqua">
            </div>
        </div>
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
  
  $("#search").click(function(){
    var loaigd = $("input[name=optradio]:checked").val();
    var magiaodich = $("#magiaodich").val();
    $.ajax({
            url:"../models/search.php", 
            method:"post",  
            data:{
                loaigd: loaigd,
                magiaodich: magiaodich
            },  
            dataType:"text",  
            success:function(data)  
            {  
              var tmpArr = data;
              if(data != ""){
                //$("#ketqua").html(data);
                console.log(tmpArr);
              }
              else {
                alert("Có lỗi phát sinh!!! Vui lòng liên hệ admin");
              }
            }  
    });
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
