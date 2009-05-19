<?php
/////////////////////////////////////////////////////////////////
//  By: Phillip Ferland (Longbow486)                           //
//  Email: longbow486@msn.com                                  //
//  Started on: 2007-Oct-14                                    //
//  Purpose: To generate a PNG graph of a WAP's signals        //
//           from URL driven data                              //
//  Filename: genline.php                                      //
/////////////////////////////////////////////////////////////////

$startdate = "2009-Oct-14";
$lastedit  = "2009-Mar-14";

include('../lib/config.inc.php');
include('../lib/database.inc.php');
include('../lib/graph.inc.php');
pageheader("Graph AP Signal History Page");
$graphs = new graphs();
if($_POST['line']==='line')
{
	$name = $_POST['name'];
	$ssid = $_POST['ssid'];
	$mac = $_POST['mac'];
	$man = $_POST['man'];
	$auth = $_POST['auth'];
	$encry = $_POST['encry'];
	$radio = $_POST['radio'];
	$chan = $_POST['chan'];
	$lat = $_POST['lat'];
	$long = $_POST['long'];
	$btx = $_POST['btx'];
	$otx = $_POST['otx'];
	$fa = $_POST['fa'];
	$lu = $_POST['lu'];
	$nt = $_POST['nt'];
	$label = $_POST['label'];
	$sig = $_POST['sig'];
	$text = $_POST['text'];
	$linec = $_POST['linec'];
	$bgc = $_POST['bgc'];
	echo '<form action="genline.php" method="post" enctype="multipart/form-data">';
	echo '<input name="ssid" type="hidden" value="'.$ssid.'"/>';
	echo '<input name="mac" type="hidden" value="'.$mac.'"/>';
	echo '<input name="man" type="hidden" value="'.$man.'"/>';
	echo '<input name="auth" type="hidden" value="'.$auth.'"/>';
	echo '<input name="encry" type="hidden" value="'.$encry.'"/>';
	echo '<input name="radio" type="hidden" value="'.$radio.'"/>';
	echo '<input name="chan" type="hidden" value="'.$chan.'"/>';
	echo '<input name="lat" type="hidden" value="'.$lat.'"/>';
	echo '<input name="long" type="hidden" value="'.$long.'"/>';
	echo '<input name="btx" type="hidden" value="'.$btx.'"/>';
	echo '<input name="otx" type="hidden" value="'.$otx.'"/>';
	echo '<input name="fa" type="hidden" value="'.$fa.'"/>';
	echo '<input name="lu" type="hidden" value="'.$lu.'"/>';
	echo '<input name="nt" type="hidden" value="'.$nt.'"/>';
	echo '<input name="label" type="hidden" value="'.$label.'"/>';
	echo '<input name="sig" type="hidden" value="'.$sig.'"/>';
	echo '<input name="text" type="hidden" value="'.$text.'"/>';
	echo '<input name="linec" type="hidden" value="'.$linec.'"/>';
	echo '<input name="bgc" type="hidden" value="'.$bgc.'"/>';
	echo '<input name="name" type="hidden" value="'.$name.'"/>';
	echo '<input name="line" type="hidden" value=""/>';
	echo '<input name="Genline" type="submit" value="Generate Bar Graph" />';
	echo '</form>';
	
	$graphs->wifigraphline($ssid, $mac, $man, $auth, $encry, $radio, $chan, $lat, $long, $btx, $otx, $fa, $lu, $nt, $label, $sig, $name, $bgc, $linec, $text );
	
	echo 'You can find your Wifi Graph here -> <a href="../out/graph/'.$name.'v.png">'.$name.'v.png</a>';

}else
{
	$name = $_POST['name'];
	$ssid = $_POST['ssid'];
	$mac = $_POST['mac'];
	$man = $_POST['man'];
	$auth = $_POST['auth'];
	$encry = $_POST['encry'];
	$radio = $_POST['radio'];
	$chan = $_POST['chan'];
	$lat = $_POST['lat'];
	$long = $_POST['long'];
	$btx = $_POST['btx'];
	$otx = $_POST['otx'];
	$fa = $_POST['fa'];
	$lu = $_POST['lu'];
	$nt = $_POST['nt'];
	$label = $_POST['label'];
	$sig = $_POST['sig'];
	$text = $_POST['text'];
	$linec = $_POST['linec'];
	$bgc = $_POST['bgc'];
	echo '<form action="genline.php" method="post" enctype="multipart/form-data">';
	echo '<input name="ssid" type="hidden" value="'.$ssid.'"/>';
	echo '<input name="mac" type="hidden" value="'.$mac.'"/>';
	echo '<input name="man" type="hidden" value="'.$man.'"/>';
	echo '<input name="auth" type="hidden" value="'.$auth.'"/>';
	echo '<input name="encry" type="hidden" value="'.$encry.'"/>';
	echo '<input name="radio" type="hidden" value="'.$radio.'"/>';
	echo '<input name="chan" type="hidden" value="'.$chan.'"/>';
	echo '<input name="lat" type="hidden" value="'.$lat.'"/>';
	echo '<input name="long" type="hidden" value="'.$long.'"/>';
	echo '<input name="btx" type="hidden" value="'.$btx.'"/>';
	echo '<input name="otx" type="hidden" value="'.$otx.'"/>';
	echo '<input name="fa" type="hidden" value="'.$fa.'"/>';
	echo '<input name="lu" type="hidden" value="'.$lu.'"/>';
	echo '<input name="nt" type="hidden" value="'.$nt.'"/>';
	echo '<input name="label" type="hidden" value="'.$label.'"/>';
	echo '<input name="sig" type="hidden" value="'.$sig.'"/>';
	echo '<input name="text" type="hidden" value="'.$text.'"/>';
	echo '<input name="linec" type="hidden" value="'.$linec.'"/>';
	echo '<input name="bgc" type="hidden" value="'.$bgc.'"/>';
	echo '<input name="name" type="hidden" value="'.$name.'"/>';
	echo '<input name="line" type="hidden" value="line"/>';
	echo '<input name="Genline" type="submit" value="Generate Line Graph" />';
	echo '</form>';
	$graphs->wifigraphbar($ssid, $mac, $man, $auth, $encry, $radio, $chan, $lat, $long, $btx, $otx, $fa, $lu, $nt, $label, $sig, $name, $bgc, $linec, $text);

	echo 'You can find your Wifi Graph here -> <a href="../out/graph/'.$name.'.png">'.$name.'.png</a>';

}
$filename = $_SERVER['SCRIPT_FILENAME'];
footer($filename);
?>