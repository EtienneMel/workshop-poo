<?php

namespace Strings;

use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{


    public function testExo4(){


         $string = Str::toSlugCase('my String');
         $this->assertSame('my-string', $string);
    }


}
