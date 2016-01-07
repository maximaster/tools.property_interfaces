<?php

namespace Maximaster\Tools\Interfaces\UserFields;

interface CommonUserField
{
    /**
     * Должен возвращать описание пользовательского свойства
     *
     * @return array Массив с описанием методов и типа свойства
     */
    static function getUserTypeDescription();

    static function getEditFormHtml(array $arUserField, array $arHtmlControl);

    static function getAdminListViewHtml(array $arUserField, array $arHtmlControl);

    static function getAdminListEditHtml(array $arUserField, array $arHtmlControl);

    static function getFilterHtml(array $arUserField, array $arHtmlControl);


}