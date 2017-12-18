<?php

namespace Strings;

use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    /*public function testExo1(){

        $string = (string) Str::on('my_string')
            ->replace('_', ' ')
            ->majFirstLetter()
            ->replace(' ', '')
            ->minFirstLetter();

        $this->assertSame('myString', $string);

    }*/

    public function testExo2(){

         $string = Str::toCamelCase('My String');
         $this->assertSame('myString', $string);
    }

    /*public function testExo3(){
        $string = Str::on('myString')->camelCase()->toString();
        $this->assertSame('myString', $string);

    }*/


}

// Objet : [POO] NOM PRENOM
//Corps : adresse de notre repository
//Auto évaluation /20
//1 commit par exercice