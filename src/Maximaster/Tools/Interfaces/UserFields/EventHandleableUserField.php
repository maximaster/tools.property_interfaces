<?php

namespace Maximaster\Tools\Interfaces\UserFields;

interface EventHandleableUserField
{
    /**
     * Метод вызывается после непосредственной выборки данных из базы. Позволяет модифицировать результат выборки
     *
     * @param array $arUserField
     * @param array $value
     * @return mixed
     */
    static function OnAfterFetch(array $arUserField, array $value);

    /**
     * Метод вызывается непосредственно перед сохранением каждого значения свойства в БД (в том числе и для каждого
     * единичного значения множественного свойства). Должен вернуть конкретное значение свойства, которое
     * необходимо сохранить в БД
     *
     * @param array $arUserField
     * @param array $value
     * @param int $userId
     * @return mixed
     */
    static function OnBeforeSave(array $arUserField, $value, $userId);

    /**
     * Метод вызывается непосредственно перед сохранением значений множественного свойства в БД. Должен вернуть массив
     * значений свойств, подлежащих сохранению в БД
     *
     * @param array $arUserField
     * @param array $value
     * @param int $userId
     * @return mixed
     */
    static function OnBeforeSaveAll(array $arUserField, $value, $userId);

    /**
     * Метод вызывается перед непосредственным удалением значения свойства из БД
     *
     * @param array $arUserField
     * @param array $value
     * @return void
     */
    static function OnDelete(array $arUserField, $value);

    /**
     * Если свойство является индексируемым для модуля поиска, этот метод будет вызван в момент выполнения индексации.
     * Должен вернуть строку для поискового индекса
     *
     * @param array $arUserField
     * @return string
     */
    static function OnSearchIndex(array $arUserField);


}