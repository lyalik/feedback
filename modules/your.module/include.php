<?php
\Bitrix\Main\Loader::registerAutoLoadClasses(
     'your.module',
     [
         'Your\Module\Orm\RatingTable' => 'lib/orm/RatingTable.php',
     ]
);