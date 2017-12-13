<?php

namespace Strings;

use PHPUnit\Framework\TestCase;
include 'Str.php';

class StrTest extends TestCase
{
    public function testExo1(){

        $string = (string) Str::on(my-string)
            ->replace('_', ' ')
            ->majFirstLetter()
            ->replace(' ', '')
            ->minFirstLetter();

        $this->assertSame('myString', $string);
    }

}