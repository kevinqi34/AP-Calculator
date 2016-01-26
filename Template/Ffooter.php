<?php



echo <<<HEREDOC

<div id="footer">
		<br>
		<br>
		<p>AP, ACT, SAT, PSAT, PLAN and Advanced Placement are registered trademarks of the College Board, which does not sponsor or endorse this product. </p>
		<p>IB and International Baccalaureate are registered trademarks of the IBO, which does not sponsor or endorse this product.</p>
		<p>Descriptions of specific AP courses are taken from multiple sources including Wikipedia.</p>
		<p>Built by KQI</p>

HEREDOC;

add_Citation($bool);

echo		'<p style="color: white; font-size: 16px;">© 2016 Blloc LLC.  <a href="./privacypolicy.php">Privacy Policy</a></p>';
echo '</div>';





function add_Citation($bool) {

	global $bool;
if ($bool == 1) {

echo '<p>Icons made by Freepik from <a href="http:/www.flaticon.com">www.flaticon.com</a></p>';

}


}

?>
