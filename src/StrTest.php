<?php

namespace Strings;

use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{


/*Strings de test :
 * my_string
 * myString
 * my-string
 * my string
 * My String
 */

    public function testExo6(){

        $str = Str::on('mY StrIng');
        $string = $str->slugCase();
        $this->assertSame('my-string', $string);
    }

}
