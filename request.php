<?
$var_psid = session_id();
$var_ssid = $_SESSION["fixed_session_id"];
$var_useragent = $_SERVER["HTTP_USER_AGENT"];
$var_host = $_SERVER["HTTP_HOST"];
$var_urlto = '/bitrix/tools/timeman.php?action=admin_entry&site_id=s1&sessid=';
$request_url = $var_host.$var_urlto.$var_ssid;
?>
<? 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$request_url");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "ID=1&slider_type=0");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');*/
$headers = array();
$headers[] = "Host: $var_host";
$headers[] = "User-Agent:$var_useragent";
$headers[] = "Accept: */*";
$headers[] = "Accept-Language: ru-RU,ru;q=0.8,en-US;q=0.5,en;q=0.3";
$headers[] = "Referer: $var_host/company/mod.php";
$headers[] = "Bx-Ajax: true";
$headers[] = "Content-Type: application/x-www-form-urlencoded";
$headers[] = "Cookie: PHPSESSID=$var_psid; BITRIX_SM_TIME_ZONE=-180; BITRIX_SM_SALE_UID=1; BITRIX_SM_LOGIN=admin; BITRIX_SM_SOUND_LOGIN_PLAYED=Y";
$headers[] = "Connection: keep-alive";
$headers[] = "Pragma: no-cache";
$headers[] = "Cache-Control: no-cache";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
//print_r ($result);
?>


<? //////////////////////////DATABASE//////////////////////////////////////
$id = 1;
global $DB;
  $dbRes = $DB->Query('SELECT * FROM `b_sale_order` WHERE ID = ' . $id);

  $aRows = array();
  while ($row = $dbRes->Fetch())
  {
     $aRows[] =  $row;
  }

  echo $aRows[0]["field_name"];
?>
