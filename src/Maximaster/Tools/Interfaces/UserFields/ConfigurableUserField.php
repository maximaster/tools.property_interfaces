<?php

namespace Maximaster\Tools\Interfaces\UserFields;

interface ConfigurableUserField extends CommonUserField
{
    static function getSettingsHTML($arUserField, array $arHtmlControl, $bVarsFromForm);

    /**
     * Метод возвращает либо массив с дополнительными настройками свойства, либо весь набор настроек, включая стандартные. <br>
     * Примечание №1: до версии модуля Информационные блоки 12.5.7 метод возвращает только массив с дополнительными настройками свойства. <br>
     * Примечание №2: вызывается перед сохранением метаданных свойства в базу данных.
     *
     * @param array $arFields Значения полей метаданных свойства. См. <a href="http://dev.1c-bitrix.ru/api_help/iblock/fields.php#fproperty">Свойства элементов инфоблока</a>
     * @return mixed
     */
    static function prepareSettings($arFields);
}