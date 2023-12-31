<?php
/**
 * V1RolePolicyType
 *
 * PHP version 5
 *
 * @category Class
 * @package  AuthzAdmin\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * authz/admin/v1/admin_api.proto
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: version not set
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.25-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace AuthzAdmin\Client\Model;
use \AuthzAdmin\Client\ObjectSerializer;

/**
 * V1RolePolicyType Class Doc Comment
 *
 * @category Class
 * @description RolePolicyType defines the allowed types for role &amp; policy entities.
 * @package  AuthzAdmin\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1RolePolicyType
{
    /**
     * Possible values of this enum
     */
    const INTERNAL = 'ROLE_POLICY_TYPE_INTERNAL';
    const EXTERNAL = 'ROLE_POLICY_TYPE_EXTERNAL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INTERNAL,
            self::EXTERNAL,
        ];
    }
}


