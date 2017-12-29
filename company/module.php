<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); 
$APPLICATION->SetPageProperty("HIDE_SIDEBAR", "Y");
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_after.php");
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/company/timeman.php");

$APPLICATION->SetTitle(GetMessage("COMPANY_TITLE"));
?> <?
//$APPLICATION->IncludeComponent("bitrix:timeman.report", ".default", array());
?>

<?// echo '<style>
  //.bx-panel-tooltip {
  //display: block!important;}
  //</style>';?>

<?
$APPLICATION->IncludeComponent("bitrix:timeman.module", ".default", array());
//CTimeManReportDaily::GetList($arOrder = array(), $arFilter = array(), $arGroupBy = false, $arNavStartParams = false, $arSelectFields = array());
//echo '<pre>';
//print_r ($dbRes);
//echo 'array';
print_r ($arResult);
CTimeManEntry::GetList();
print_r ($IP_OPEN);

?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>