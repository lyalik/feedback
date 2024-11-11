<?php
use Bitrix\Main\Config\Option;

$module_id = 'your.module';

if ($REQUEST_METHOD == "POST" && check_bitrix_sessid()) {
    Option::set($module_id, "access_rights", $_POST["access_rights"]);
}

$accessRights = Option::get($module_id, "access_rights", "");
?>
<form method="post">
    <?=bitrix_sessid_post()?>
    <label for="access_rights">Права доступа:</label>
    <input type="text" name="access_rights" value="<?=htmlspecialcharsbx($accessRights)?>">
    <input type="submit" value="Сохранить">
</form>