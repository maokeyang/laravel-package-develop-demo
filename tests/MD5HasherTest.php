<?php

/**
 * Created by PhpStorm.
 * User: wanghan
 * Date: 2017/4/7
 * Time: 上午11:35
 */
use PHPUnit\Framework\TestCase;

class MD5HasherTest extends TestCase
{
    protected $hasher;

    public function setUp()
    {
        $this->hasher = new \Maokeyang\Hasher\MD5Hasher();
    }

    public function testMD5HasherMake()
    {
        $password = md5('password');
        $passwordSec = $this->hasher->make('password');

        $this->assertEquals($password, $passwordSec);
    }

    public function testMD5HasherMakeWithSalt()
    {
        $password = md5('passwordmaokeyang');
        $passwordSec = $this->hasher->make('password', ['salt' => 'maokeyang']);

        $this->assertEquals($password, $passwordSec);
    }

    public function testMD5HasherCheck()
    {
        $password = md5('password');
        $passwordCheck = $this->hasher->check('password', $password);

        $this->assertTrue($passwordCheck);
    }

    public function testMD5HasherWithSaltCheck()
    {
        $password = md5('passwordmaokeyang');
        $passwordCheck = $this->hasher->check('password', $password, ['salt' => 'maokeyang']);

        $this->assertTrue($passwordCheck);
    }
}