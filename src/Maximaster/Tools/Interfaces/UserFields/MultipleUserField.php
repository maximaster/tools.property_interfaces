<?php

namespace Maximaster\Tools\Interfaces\UserFields;

interface MultipleUserField extends CommonUserField
{
    static function GetEditFormHTMLMulty(array $arUserField, array $arHtmlControl);

    static function GetAdminListViewHTMLMulty(array $arUserField, array $arHtmlControl);

    static function GetAdminListEditHTMLMulty(array $arUserField, array $arHtmlControl);
}