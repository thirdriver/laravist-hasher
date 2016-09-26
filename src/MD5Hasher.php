<?php
/**
 * Created by PhpStorm.
 * User: thirdriver
 * Date: 16/9/24
 * Time: 下午2:32
 */

namespace Laravists\Hasher;


/**
 * Class MD5Hasher
 * @package Laravist\Hasher
 */
class MD5Hasher
{
    /**
     * @param $value
     * @param array $options
     * @return string
     */
    public function make($value, array $options = [])
    {
        $salt = isset($options['salt']) ?: '';

        return hash('md5', $value . $salt);
    }

    /**
     * @param $value
     * @param $hashValue
     * @param array $options
     * @return bool
     */
    public function check($value, $hashValue, array $options = [])
    {
        $salt = isset($options['salt']) ?: '';

        return hash('md5', $value . $salt) === $hashValue;
    }
}