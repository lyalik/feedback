<?php
namespace Your\Module\Orm;

use Bitrix\Main\Entity;
use Bitrix\Main\Type;

class AppealTable extends Entity\DataManager
{
    public static function getTableName()
    {
        return 'appeals';
    }

    public static function getMap()
    {
        return [
            new Entity\IntegerField('ID', [
                'primary' => true,
                'autocomplete' => true,
            ]),
            new Entity\StringField('NUMBER', [
                'required' => true,
            ]),
        ];
    }
}
