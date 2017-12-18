<?php

namespace Strings;

use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{


    public function testExo3(){


         $string = Str::toSnakeCase('My String');
         $this->assertSame('my_string', $string);
    }


}
