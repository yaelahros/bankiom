<?php
include 'curl.php';
echo "Reffmu (ex: sFflyVB): ";
$reff = trim(fgets(STDIN));
while(true){
$nama = explode(" ", nama());
$nama1 = $nama[0];
$nama2 = $nama[1];
$reffuser = string(7);
$gmail = $nama1.$nama2.random(3).'@gmail.com';
$data = '{"params":{"event":"registration","user":{"firstname":"'.$nama1.'","lastname":"'.$nama2.'","email":"'.$gmail.'"},"referrer":{"referralCode":"'.$reff.'"},"refSource":"whatsapp","acquiredFrom":"form_widget"},"publicToken":"xlpIkQFqSuuOgXAwIp8GOUuRRno"}';
$headers1 = [
'Host: app.viral-loops.com',
'sec-fetch-dest: empty',
'x-ucid: xlpIkQFqSuuOgXAwIp8GOUuRRno',
'user-agent: Mozilla/5.0 (Linux; Android 9; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.162 Mobile Safari/537.36',
'content-type: application/json',
'accept: */*',
'origin: https://www.bankiom.com',
'sec-fetch-site: cross-site',
'sec-fetch-mode: cors',
'referer: https://www.bankiom.com/?referralCode='.$reff.'&refSource=whatsapp',
];
$curl1 = curl('https://app.viral-loops.com/api/v2/events', $data, $headers1);
if(strpos($curl1, 'isNew')){
echo color("green", "[✓]")." | ".color("yellow",$curl1);
}else{
echo color("red", "[×]")." | ".color("yellow",$curl1);
}
echo "\n";
}
