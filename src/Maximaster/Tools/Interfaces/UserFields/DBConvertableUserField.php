<?php

namespace Maximaster\Tools\Interfaces\UserFields;

interface DBConvertableUserField extends CommonUserField
{
    /**
     * Метод должен преобразовать значение свойства в формат пригодный для сохранения в базе данных.
     * И вернуть массив вида array("VALUE" => "...", "DESCRIPTION" => "...").
     * Если значение свойства это массив, то разумным будет использование функции serialize.
     * А вот Дата/время преобразуется в ODBC формат "YYYY-MM-DD HH:MI:SS".
     * Это определит возможности сортировки и фильтрации по значениям данного свойства.
     *
     * @param array $arUserField
     * @param array $value
     * @return array
     */
    static function ConvertToDB(array $arUserField, array $value);

    /**
     * Метод должен преобразовать значение свойства из формата пригодного для сохранения в базе данных в формат обработки.
     * И вернуть массив вида array("VALUE" => "...", "DESCRIPTION" => "...").
     *
     * @see MinimumIblockProperty::ConvertToDB
     * @param array $arUserField
     * @param array $value
     * @return mixed
     */
    static function ConvertFromDB(array $arUserField, array $value);

}