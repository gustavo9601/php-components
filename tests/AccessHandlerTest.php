<?php

use PHPComponentes\AccessHandler;

/*
 * Ejecutar las pruebas con el archivo phpunit.xml definido
 * vendor\bin\phpunit.bat --colors
 * vendor\bin\phpunit.bat
 *
 * Crear alias en power shell
 *  Set-Alias t vendor\bin\phpunit.bat
 *
 * Crear alias en Linux
 *  alias t=vendor\bin\phpunit
 * */


class AccessHandlerTest extends \PHPUnit\Framework\TestCase
{
    public function test_grant_access()
    {
        $this->assertTrue(AccessHandler::check('admin'));
    }

    public function test_deny_access()
    {
        $this->assertFalse(AccessHandler::check('editor'));
    }
}