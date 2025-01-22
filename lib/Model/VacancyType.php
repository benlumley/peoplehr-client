<?php
/**
 * VacancyType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  PeopleHR
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PeopleHR API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 3.1
 * Contact: customerservices@peoplehr.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace PeopleHR\Model;
use \PeopleHR\ObjectSerializer;

/**
 * VacancyType Class Doc Comment
 *
 * @category Class
 * @description Is hide salary default value
 * @package  PeopleHR
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VacancyType
{
    /**
     * Possible values of this enum
     */
    public const EXTERNAL = 'external';

    public const INTERNAL = 'internal';

    public const BOTH = 'both';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EXTERNAL,
            self::INTERNAL,
            self::BOTH
        ];
    }
}


