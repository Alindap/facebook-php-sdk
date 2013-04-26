<html>
<head>
<title>My first facebook app</title>
</head>
<?php
//Get PHP SDK
require_once 'facebook-php-sdk/src/facebook.php';
// Create our Application instance.
$facebook = new Facebook( array('appId' => '456083577801026',
'secret' => 'ad3d2b60c03b4acdfa0b2f1c473bd517', 'cookie' => true, ));
$signed_request = $facebook -> getSignedRequest();
$like_status = $signed_request["page"]["liked"];
if ($like_status == "1") {
//If the page is liked then display full app.

?>

<div id="liked">
<center>Second Step- Fill in the basic information of you &amp; answer the simple questions.</center><center></center><center>?Submit and you'll get a chance to win the Prizes!!</center><center></center><center>Need some<strong>?HINTS</strong>?? Visit?<a href="http://blog.goplextor.com/" target="_blank">Plextor Global Blog!</a></center><a href="http://www.verique.com/plexsurvey/134-2/" target="_blank">Check out the Prizes.</a>

[iphorm id="3" name="Plextor Giveaway "]

<a href="http://www.verique.com/plexsurvey/wp-content/uploads/sites/2/2013/03/Picture2.png"><img alt="Picture2" src="http://www.verique.com/plexsurvey/wp-content/uploads/sites/2/2013/03/Picture2.png" width="627" height="237" /></a>
</div>

<?php

} else {

//If the page is not liked then do this.

?>
<div id="unliked">

<p style="text-align: center;">First Step- <strong>LIKE</strong> Plextor Global Fan pag</p>
&nbsp;

</div>
<?
}
?>
</body>
</html>
