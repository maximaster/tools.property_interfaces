<?php

namespace Maximaster\Tools\Interfaces\UserFields;

use Bitrix\Main\Entity\ScalarField;

interface HLBlockCustomEntityUserField extends CommonUserField
{
    static function getEntityField($fieldName, $fieldParameters);

    static function getEntityReferences($arUserField, ScalarField $entityField);

    /**
     * Функция вызывается при добавлении нового свойства для конструирования SQL запроса создания столбца значений свойства
     *
     * @param array $arUserField
     * @return string SQL
     */
    static function getDBColumnType(array $arUserField);
}