<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 9/16/14
 * Time: 9:42 PM
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    //Generic
    'Generic::isRequired'                    => '\GenericTrait::isRequired',
    'Generic::isNotNull'                     => '\GenericTrait::isNotNull',
    //Float
    "Float::__construct"                     => '\Float\FloatTrait::isFloat',
    "Float::isNotZero"                       => '\Float\FloatTrait::isNotZero',
    "Float::isPositive"                      => '\Float\FloatTrait::isPositive',
    "Float::isNegative"                      => '\Float\FloatTrait::isNegative',
    "Float::isBetween"                       => '\Float\FloatTrait::isBetween',
    'Float::isOdd'                           => '\Float\FloatTrait::isOdd',
    'Float::isEven'                          => '\Float\FloatTrait::isEven',
    'Float::isMultiple'                      => '\Float\FloatTrait::isMultiple',
    //Integer
    "Integer::__construct"                   => '\Integer\IntegerTrait::isInteger',
    "Integer::isNotZero"                     => '\Integer\IntegerTrait::isNotZero',
    "Integer::isPositive"                    => '\Integer\IntegerTrait::isPositive',
    "Integer::isNegative"                    => '\Integer\IntegerTrait::isNegative',
    "Integer::isBetween"                     => '\Integer\IntegerTrait::isBetween',
    'Integer::isOdd'                         => '\Integer\IntegerTrait::isOdd',
    'Integer::isEven'                        => '\Integer\IntegerTrait::isEven',
    'Integer::isMultiple'                    => '\Integer\IntegerTrait::isMultiple',
    //String
    'String::__construct'                    => '\String\StringTrait::isString',
    'String::isAlphanumeric'                 => '\String\StringTrait::isAlphanumeric',
    'String::isAlpha'                        => '\String\StringTrait::isAlpha',
    'String::isBetween'                      => '\String\StringTrait::isBetween',
    'String::isCharset'                      => '\String\StringTrait::isCharset',
    'String::isAllConsonants'                => '\String\StringTrait::isAllConsonants',
    'String::contains'                       => '\String\StringTrait::contains',
    'String::isControlCharacters'            => '\String\StringTrait::isControlCharacters',
    'String::isDigit'                        => '\String\StringTrait::isDigit',
    'String::endsWith'                       => '\String\StringTrait::endsWith',
    'String::equals'                         => '\String\StringTrait::equals',
    'String::in'                             => '\String\StringTrait::in',
    'String::hasGraphicalCharsOnly'          => '\String\StringTrait::hasGraphicalCharsOnly',
    'String::hasLength'                      => '\String\StringTrait::hasLength',
    'String::isLowercase'                    => '\String\StringTrait::isLowercase',
    'String::notEmpty'                       => '\String\StringTrait::notEmpty',
    'String::noWhitespace'                   => '\String\StringTrait::noWhitespace',
    'String::hasPrintableCharsOnly'          => '\String\StringTrait::hasPrintableCharsOnly',
    'String::isPunctuation'                  => '\String\StringTrait::isPunctuation',
    'String::matchesRegex'                   => '\String\StringTrait::matchesRegex',
    'String::isSlug'                         => '\String\StringTrait::isSlug',
    'String::isSpace'                        => '\String\StringTrait::isSpace',
    'String::startsWith'                     => '\String\StringTrait::startsWith',
    'String::isUppercase'                    => '\String\StringTrait::isUppercase',
    'String::isVersion'                      => '\String\StringTrait::isVersion',
    'String::isVowel'                        => '\String\StringTrait::isVowel',
    'String::isHexDigit'                     => '\String\StringTrait::isHexDigit',
    'String::hasLowercase'                   => '\String\StringTrait::hasLowercase',
    'String::hasUppercase'                   => '\String\StringTrait::hasUppercase',
    'String::hasNumeric'                     => '\String\StringTrait::hasNumeric',
    'String::hasSpecialCharacters'           => '\String\StringTrait::hasSpecialCharacters',
    'String::isEmail'                        => '\String\StringTrait::isEmail',
    'String::isUrl'                          => '\String\StringTrait::isUrl',
    //Object
    'Object::__construct'                    => '\Object\ObjectTrait::isObject',
    'Object::isInstanceOf'                   => '\Object\ObjectTrait::isInstanceOf',
    'Object::hasProperty'                    => '\Object\ObjectTrait::hasProperty',
    'Object::hasMethod'                      => '\Object\ObjectTrait::hasMethod',
    'Object::hasParentClass'                 => '\Object\ObjectTrait::hasParentClass',
    'Object::isChildOf'                      => '\Object\ObjectTrait::isChildOf',
    'Object::inheritsFrom'                   => '\Object\ObjectTrait::inheritsFrom',
    'Object::hasInterface'                   => '\Object\ObjectTrait::hasInterface',
    //DateTime
    'DateTime::__construct'                  => '\DateTime\DateTimeTrait::isDateTime',
    'DateTime::isAfter'                      => '\DateTime\DateTimeTrait::isAfter',
    'DateTime::isBefore'                     => '\DateTime\DateTimeTrait::isBefore',
    'DateTime::isBetween'                    => '\DateTime\DateTimeTrait::isBetween',
    'DateTime::isWeekend'                    => '\DateTime\DateTimeTrait::isWeekend',
    'DateTime::isWeekday'                    => '\DateTime\DateTimeTrait::isWeekday',
    'DateTime::isMonday'                     => '\DateTime\DateTimeTrait::isMonday',
    'DateTime::isTuesday'                    => '\DateTime\DateTimeTrait::isTuesday',
    'DateTime::isWednesday'                  => '\DateTime\DateTimeTrait::isWednesday',
    'DateTime::isThursday'                   => '\DateTime\DateTimeTrait::isThursday',
    'DateTime::isFriday'                     => '\DateTime\DateTimeTrait::isFriday',
    'DateTime::isSaturday'                   => '\DateTime\DateTimeTrait::isSaturday',
    'DateTime::isSunday'                     => '\DateTime\DateTimeTrait::isSunday',
    'DateTime::isToday'                      => '\DateTime\DateTimeTrait::isToday',
    'DateTime::isYesterday'                  => '\DateTime\DateTimeTrait::isYesterday',
    'DateTime::isTomorrow'                   => '\DateTime\DateTimeTrait::isTomorrow',
    'DateTime::isLeapYear'                   => '\DateTime\DateTimeTrait::isLeapYear',
    'DateTime::isMorning'                    => '\DateTime\DateTimeTrait::isMorning',
    'DateTime::isAftenoon'                   => '\DateTime\DateTimeTrait::isAftenoon',
    'DateTime::isEvening'                    => '\DateTime\DateTimeTrait::isEvening',
    'DateTime::isNight'                      => '\DateTime\DateTimeTrait::isNight',
    //Collection
    'Collection::__construct'                => '\Collection\CollectionTrait::isArray',
    'Collection::each'                       => '\Collection\CollectionTrait::each',
    'Collection::hasKeyFormat'               => '\Collection\CollectionTrait::hasKeyFormat',
    'Collection::endsWith'                   => '\Collection\CollectionTrait::endsWith',
    'Collection::contains'                   => '\Collection\CollectionTrait::contains',
    'Collection::hasKey'                     => '\Collection\CollectionTrait::hasKey',
    'Collection::hasLength'                  => '\Collection\CollectionTrait::hasLength',
    'Collection::isNotEmpty'                 => '\Collection\CollectionTrait::isNotEmpty',
    'Collection::startsWith'                 => '\Collection\CollectionTrait::startsWith',
    //FileUpload
    'FileUpload::__construct'                => '\FileUpload\FileUploadTrait::isUploaded',
    'FileUpload::isBetween'                  => '\FileUpload\FileUploadTrait::isBetween',
    'FileUpload::isMimeType'                 => '\FileUpload\FileUploadTrait::isMimeType',
    'FileUpload::hasFileNameFormat'          => '\FileUpload\FileUploadTrait::hasFileNameFormat',
    'FileUpload::hasValidUploadDirectory'    => '\FileUpload\FileUploadTrait::hasValidUploadDirectory',
    'FileUpload::notOverwritingExistingFile' => '\FileUpload\FileUploadTrait::notOverwritingExistingFile',
    'FileUpload::isImage'                    => '\FileUpload\FileUploadTrait::isImage',
    'FileUpload::hasLength'                  => '\FileUpload\FileUploadTrait::hasLength',
];
