<?php
use Nikita\MyLog;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class MyLogTest extends TestCase
{
	
    public function testLog($str)
    {
        $this->assertEquals('',  \Nikita\MyLog::log($str));
    }
	
    public function providerSolve(): array
    {
        return array (
            array ("testkvest"),
            array ("kvesttest"),
            array (1211001101),
            array (false)
        );
    }
	
    public function testLogEx()
    {
        $this->expectException(TypeError::class);
        $this->assertEquals('',  \Nikita\MyLog::log(null));
        $this->assertEquals('',  \Nikita\MyLog::log());
    }
	
    public function testWrite()
    {
        $this->assertEquals('',   \Nikita\MyLog::write(123));
        $this->assertEquals('',   \Nikita\MyLog::write("test"));
        $this->assertEquals('',   \Nikita\MyLog::write());
    }
}
