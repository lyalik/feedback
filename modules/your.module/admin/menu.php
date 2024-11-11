<?php
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

if ($APPLICATION->GetGroupRight("your.module") >= "R") {
    $aMenu = [
        "parent_menu" => "global_menu_marketing",
        "section" => "your_module",
        "sort" => 100,
        "text" => Loc::getMessage("YOUR_MODULE_MENU_TITLE"),
        "title" => Loc::getMessage("YOUR_MODULE_MENU_TITLE"),
        "url" => "your_module_ratings_list.php?lang=" . LANGUAGE_ID,
        "icon" => "your_module_menu_icon",
        "page_icon" => "your_module_page_icon",
        "items_id" => "menu_your_module",
        "items" => [],
    ];

    return $aMenu;
}

return false;
