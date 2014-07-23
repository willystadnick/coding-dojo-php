<?php

class LivrariaTest extends PHPUnit_Framework_TestCase
{
    protected $livro;
    const  PRECO = 41;

    // run before any test method of this class will be executed
    public static function setUpBeforeClass()
    {
    }

    // run before each test method
    protected function setUp()
    {
        $this->livro = new Livro(self::PRECO);
    }



    public function testLivro()
    {
        $this->assertEquals(self::PRECO, $this->livro->preco());
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
