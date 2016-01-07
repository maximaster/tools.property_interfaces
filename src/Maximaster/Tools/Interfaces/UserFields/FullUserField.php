<?php

namespace Maximaster\Tools\Interfaces\UserFields;

use Bitrix\Main\Entity\ScalarField;

interface FullCustomEntityUserField extends CommonUserField, ConfigurableUserField, HLBlockCustomEntityUserField
{
    /**
     * Метод должен проверить корректность значения свойства и вернуть массив.
     * Пустой, если ошибок нет, и с сообщениями об ошибках, если есть.
     *
     * @param array $arUserField
     * @param mixed $value
     * @return array
     */
    static function CheckFields(array $arUserField, array $value);

    /**
     * Метод должен вернуть фактическую длину значения свойства.
     * Этот метод нужен только для свойств значения которых представляют собой сложные структуры (например массив).
     *
     * @param array $arUserField
     * @param array $value
     * @return int
     */
    static function GetLength(array $arUserField, array $value);

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

    /**
     * Метод должен вернуть HTML отображения элемента управления для редактирования значений свойства в административной части.
     *
     * @param array $arUserField
     * @param array $value
     * @param array $strHTMLControlName
     * @return string
     */
    static function GetPropertyFieldHtml(array $arUserField, array $value, array $strHTMLControlName);

    /**
     * Метод должен вернуть результат проверки прав пользователя на редактирование этого свойства
     *
     * @param array $arUserField
     * @param int $userId
     * @return bool
     */
    static function checkPermission(array $arUserField, $userId);

    static function OnAfterFetch(array $arUserField, array $value);

    static function GetEditFormHTMLMulty(array $arUserField, array $arHtmlControl);

    static function GetAdminListViewHTMLMulty(array $arUserField, array $arHtmlControl);

    static function GetAdminListEditHTMLMulty(array $arUserField, array $arHtmlControl);

    static function OnBeforeSave(array $arUserField, $value, $userId);

    static function OnBeforeSaveAll(array $arUserField, $value, $userId);

    static function OnDelete(array $arUserField, $value);

    static function OnSearchIndex(array $arUserField);

}