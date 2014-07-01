<?php

class SampleTest extends PHPUnit_Framework_TestCase
{
    protected $sample;

    // run before any test method of this class will be executed
    public static function setUpBeforeClass()
    {
    }

    // run before each test method
    protected function setUp()
    {
        $this->sample = new Sample();
    }

    public function testSample()
    {
        $this->assertEquals('sample', $this->sample->sample());
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
