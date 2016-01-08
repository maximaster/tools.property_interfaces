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

    /**
     * Метод должен в виде строки вернуть поле для ввода значения свойства. Отвечает за интерфейс редактирования значения
     * Главное, чтобы метод вернул элемент html формы с правильным названием, чтобы при клике по кнопке "Сохранить"
     * значение этого элемента формы отправилось вместе с формой. Имя для инпута можно забрать из $arHtmlControl
     *
     * @param array $arUserField
     * @param array $arHtmlControl
     * @return mixed
     */
    static function getEditFormHtml(array $arUserField, array $arHtmlControl);

    /**
     * Не редактируемое html отображение свойства
     *
     * @param array $arUserField
     * @param array $arHtmlControl
     * @return mixed
     */
    static function getAdminListViewHtml(array $arUserField, array $arHtmlControl);

    /**
     * Аналогично getEditFormHtml за исключением того, что этот метод вызывается при построении интерфейса в списочных
     * формах, т.е. надо предусмотреть одновременное размещение нескольких таких полей на одной странице
     *
     * @param array $arUserField
     * @param array $arHtmlControl
     * @return mixed
     */
    static function getAdminListEditHtml(array $arUserField, array $arHtmlControl);

    /**
     * Аналогично getEditFormHtml, только вызывается при показе значения свойства в фильтре. Тут имеет смысл показывать
     * все возможные значения свойства и выделить действующее значение
     *
     * @param array $arUserField
     * @param array $arHtmlControl
     * @return mixed
     */
    static function getFilterHtml(array $arUserField, array $arHtmlControl);

}