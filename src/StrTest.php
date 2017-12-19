<?php

namespace Strings;

use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{

    public function testExo7(){

        $str = new Str('mY StrIng');
        $string = $str->titleCase(); // true
        $this->assertSame('myString', $string);
    }

}
