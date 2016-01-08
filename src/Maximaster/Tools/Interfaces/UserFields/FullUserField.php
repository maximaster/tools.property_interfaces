<?php

namespace Maximaster\Tools\Interfaces\UserFields;

interface FullCustomEntityUserField extends
    CommonUserField,
    MultipleUserField,
    ConfigurableUserField,
    HLBlockCustomEntityUserField,
    EventHandleableUserField,
    DBConvertableUserField
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
     * Метод должен вернуть результат проверки прав пользователя на редактирование этого свойства
     *
     * @param array $arUserField
     * @param int $userId
     * @return bool
     */
    static function checkPermission(array $arUserField, $userId);

}