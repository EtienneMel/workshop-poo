<?php

namespace Strings;

use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{


    public function testExo4(){


         $string = Str::toTitleCase('myString');
         $this->assertSame('MyString', $string);
    }


}
