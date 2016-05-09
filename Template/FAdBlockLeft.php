<?php

echo <<<HEREDOC

<div id="adblockleft">

<script>
  var screenWidth = $(window).width();
  alert(screenWidth);

if (screenWidth > 1350) {
  $('#adblockleft').html('<iframe style="width:120px;height:240px;margin-left: calc(50% - 60px);margin-top: 150px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=spere-10-20&marketplace=amazon&region=US&placement=1438005008&asins=1438005008&linkId=6DL5QPCRNHUPRM5C&show_border=true&link_opens_in_new_window=true"></iframe>');


}else {
  $('#adblockleft').html('<a href="http://www.tkqlhce.com/click-8066581-10941828-1391449830000" target="_top"><img src="http://www.awltovhc.com/image-8066581-10941828-1391449830000" width="300" height="250" alt="" border="0"/></a>');
}

</script>

</div>

HEREDOC;



?>
