<style>
#root_div{margin:auto; width:97%; text-align:center;padding:5px; border-radius:3px; border:1px solid}
#root_div div{margin-top:10px; padding:5px;}

</style>
<?php 

 
 $firstUrl		=	$_REQUEST["subs_url"];
 $secondUrl	=	$_REQUEST["subs_subsUrl"];
 if($firstUrl!="" && $secondUrl!=""){
	$posturl = "{$firstUrl}/frontend/xmlSubscribe.aspx";
 }
 
 
 $postvars = "Email=".$_POST['sub-email']."&sms={$_REQUEST["sub-phone"]}&List={$_REQUEST["ListIDPOST"]}&csvFldNames=".$_POST['codeext1ID'].";".$_POST['codeext2ID']."&csvFldValues=".$_POST['sub-ext1'].";".$_POST['sub-ext2']."&retCode=1&Confirm={$_POST["RequestconfirmationbyemailID"]}&group={$_POST["groupValue"]}";
 
 if($firstUrl==""){
 	echo "<div id='root_div'>";
	echo "<div id='result'><span style=\"font-family:Arial;\">{$_REQUEST["genericmsgID"]}</span></div>";
	echo "<div id='back_buttom'><a href='javascript:history.back()'  style=\"font-family:Arial;\">OK</a></div>";

	echo"</div>";
	exit;
 }
 
 if($_SERVER['REQUEST_METHOD']==='POST') {  // REQUIRE POST OR DIE
 
 $ch = curl_init($posturl);
 curl_setopt($ch, CURLOPT_POST ,1);
 curl_setopt($ch, CURLOPT_POSTFIELDS,$postvars);
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION  ,1);
 curl_setopt($ch, CURLOPT_HEADER      ,0);  // DO NOT RETURN HTTP HEADERS
 curl_setopt($ch, CURLOPT_RETURNTRANSFER  ,1);  // RETURN THE CONTENTS OF THE CALL
 $Rec_Data = curl_exec($ch);
 curl_close($ch);
 
} else die('Hacking attempt Logged!');

if($Rec_Data=="")
{
	$result="URL error, please check MailUp console host address";
	$back	="Back";
}

if($Rec_Data!="")
{
	$result=$_REQUEST["successmsgID"];
	$back	="Back";
}

if($Rec_Data==1)
{
	$result=$_REQUEST["genericmsgID"];
	$back="Try Again";
}

if($Rec_Data==2)
{
	$result=$_REQUEST["invalidmsgID"];
	$back="Try Again";
}

if($Rec_Data==3)
{
	$result=$_REQUEST["alreadymsgID"];
	$back="Try Again";
}

echo "<div id='root_div'>";
echo "<div id='result'><span style=\"font-family:Arial;\">{$result}</span></div>";
echo "<div id='back_buttom'><a href='javascript:history.back()'  style=\"font-family:Arial;\">OK</a></div>";
echo"</div>";

exit;

?>	 
