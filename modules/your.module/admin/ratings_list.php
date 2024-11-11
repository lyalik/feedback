<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_before.php");
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// use Bitrix\Main\Loader;
use Your\Module\Orm\RatingTable;

if (!Loader::includeModule('your.module')) {
    die('Module not loaded!');
}

// Получение данных из таблицы
$rsData = RatingTable::getList([
    'select' => ['ID', 'APPEAL_ID', 'OPERATOR', 'POLITENESS', 'SPEED'],
    'order' => ['ID' => 'ASC'],
]);

while ($arData = $rsData->fetch()) {
    // Проверка существования ключей в массиве
    $id = isset($arData['ID']) ? $arData['ID'] : 'N/A';
    $appealId = isset($arData['APPEAL_ID']) ? $arData['APPEAL_ID'] : 'N/A';
    $operator = isset($arData['OPERATOR']) ? $arData['OPERATOR'] : 'N/A';
    $politeness = isset($arData['POLITENESS']) ? $arData['POLITENESS'] : 'N/A';
    $speed = isset($arData['SPEED']) ? $arData['SPEED'] : 'N/A';

    // Вывод данных
    echo "ID: $id, Appeal ID: $appealId, Operator: $operator, Politeness: $politeness, Speed: $speed<br>";
}

require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin_after.php");
?>