<?php
namespace Your\Module\Orm;

use Bitrix\Main\Entity;
use Bitrix\Main\Type;

class RatingTable extends Entity\DataManager
{
    public static function getTableName()
    {
        return 'ratings';
    }

    public static function getMap()
    {
        return [
            new Entity\IntegerField('ID', [
                'primary' => true,
                'autocomplete' => true,
            ]),
            new Entity\IntegerField('APPEAL_ID', [
                'required' => true,
            ]),
            new Entity\IntegerField('OPERATOR', [
                'required' => true,
            ]),
            new Entity\IntegerField('POLITENESS', [
                'required' => true,
            ]),
            new Entity\IntegerField('SPEED', [
                'required' => true,
            ]),
        ];
    }
}
?>