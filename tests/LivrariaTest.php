<?php

class LivrariaTest extends PHPUnit_Framework_TestCase
{
    protected $livro;

    // run before any test method of this class will be executed
    public static function setUpBeforeClass()
    {
    }

    // run before each test method
    protected function setUp()
    {
        $this->livro = new Livro();
    }



    public function testLivro()
    {
        $this->assertEquals(42, $this->livro->preco());
    }

    // run after each test method
    protected function tearDown()
    {
        $this->sample = null;
    }

    // run after all test methods of this class have been executed
    public static function tearDownAfterClass()
    {
    }
}
