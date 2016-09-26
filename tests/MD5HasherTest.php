<?php
/**
 * Created by PhpStorm.
 * User: thirdriver
 * Date: 16/9/26
 * Time: 下午7:48
 */

namespace packages\laravists\hasher\tests;

use Laravists\Hasher\MD5Hasher;
use PHPUnit_Framework_TestCase;

class MD5HasherTest extends PHPUnit_Framework_TestCase
{
    protected $hasher;

    public function setUp()
    {
        $this->hasher = new MD5Hasher();
    }

    public function testMD5HasherMake()
    {
        $passwd = md5('password');
        $passwdTwo = $this->hasher->make('password');

        $this->assertEquals($passwd, $passwdTwo);
    }
}