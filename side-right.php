<div class="col-md-4">
                <div class="background-column">
                    <div class="panel panel-primary">
                      <div class="panel-heading">Tỷ Giá (VNĐ)</div>
                      <div class="panel-body">
                        <table class="table">
                            <thead>
                              <tr class="danger">
                                <th>Đồng Tiền</th>
                                <th>Giá Bán</th>
                                <th>Giá Mua</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><b>BTC</b></td>
                                <td><b class="color-sell"><?php echo ($rateDetail['rate_root'] + $rateDetail['rate_root']*$rateDetail['rate_sell']/100);?></b></td>
                                <td><b class="color-buy"><?php echo ($rateDetail['rate_root'] + $rateDetail['rate_root']*$rateDetail['rate_buy']/100);?></b></td>
                              </tr>
                            </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="panel panel-primary" id="huongdangd">
                      <div class="panel-heading">Hướng dẫn thanh toán</div>
                      <div class="panel-body">
                        <div>
                          Vui lòng chuyển khoản cho tài khoản <b>Vietcombank</b> sau:
                        </div>
                        <div>
                          <span>Số tài khoản: </span><strong><?php echo $mybank;?></strong>
                        </div>
                        <div>
                          <span>Số tiền: </span><strong id="sotienchuyen"></strong>
                        </div>
                        <div>
                          <span>Nội dung chuyển khoản (memo): </span>
                          <br>
                          <strong id="noidungchuyenkhoan"></strong>
                        </div>
                        <div class="text-info">
                          <strong>Chú ý: Bạn hãy chuyển chính xác số tiền (kể cả số lẻ) và nội dung chuyển tiền như hướng dẫn (phần in đậm). Nếu không chúng tôi sẽ không xử lý.</strong>
                        </div>
                      </div>
                    </div>
                    <div class="well ng-scope" ng-if="ourSites() &amp;&amp; locale == 'vi'">
                      <div class="panel">
                        <a ui-sref="root.faq" href="/faq">
                          <img class="responsive full-width" src="/images/sidebar-faq-fad0ef1cfc1bf16229eb9d8522e833c1.png">
                        </a>
                      </div>
                      <div class="panel">
                        <a href="javascript:void(Tawk_API.toggle())">
                          <img class="responsive full-width" src="/images/sidebar-chat-689e612e384780bcfdc13f6da138bad5.png">
                        </a>
                      </div>
                      <div class="panel full-width">
                        <img class="responsive img-phone-left" src="/images/sidebar-phone-left-a099e3fa329c09eda1a3ceb213f39938.png"><b>093-992-6188</b>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
<!-- /.container -->
</body>
</html>