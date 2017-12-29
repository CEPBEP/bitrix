<?$ch = curl_init();
$csx = session_id();
curl_setopt($ch, CURLOPT_URL, "http://localhost:6448/bitrix/tools/timeman.php?action=admin_entry&site_id=s1&sessid=$ssid");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "ID=1&slider_type=0");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = "Host: localhost:6448";
$headers[] = $_SERVER["HTTP_USER_AGENT"];
$headers[] = "Accept: */*";
$headers[] = "Accept-Language: ru-RU,ru;q=0.8,en-US;q=0.5,en;q=0.3";
$headers[] = "Referer: http://localhost:6448/company/mod.php";
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
?>
