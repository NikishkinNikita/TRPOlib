<?php
use Nikita\ClassLine;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class SolveTest extends TestCase {

    public function testOne_solve($a, $b, $c){
        $test = new ClassLine();
        $this->assertEquals([$c], $test->solveOne($a, $b));
    }

    public function providerSolve(): array
    {
        return array (
            array (4, 7, -4),
            array (-6, 8, 1),
            array (1111, 123, -0.150)
        );
    }

    public function testSolveEx($a, $b, $c) {
        $this->expectException(\Nikita\NikitaException::class);
        $test = new Solve();
        $this->assertEquals($c, $test->solveOne($a, $b));
    }
    public function providerSolveEx (): array
    {
        return array (
            array (1, 1, -1),
            array (0, 0, 0),
            array (null, null, 0),

        );
    }
}