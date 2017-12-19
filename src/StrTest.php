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

    public function testExo4(){

        $string = Str::toSlugCase('My_String');
        $this->assertSame('my-string', $string);

    }

}
