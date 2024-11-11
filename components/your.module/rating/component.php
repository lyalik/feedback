<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Your\Module\Orm\RatingTable;

class RatingComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        if ($this->request->isPost() && check_bitrix_sessid()) {
            $this->saveRating();
        }

        $this->includeComponentTemplate();
    }

    protected function saveRating()
    {
        $result = RatingTable::add([
            'APPEAL_ID' => $this->arParams['APPEAL_ID'],
            'OPERATOR' => $this->request->getPost('operator'),
            'POLITENESS' => $this->request->getPost('politeness'),
            'SPEED' => $this->request->getPost('speed'),
        ]);

        if ($result->isSuccess()) {
            // Успешно сохранено
        } else {
            // Обработка ошибок
        }
    }
}
?>