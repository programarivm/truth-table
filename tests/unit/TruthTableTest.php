<?php

namespace TruthTable\Tests\Unit;

use PHPUnit\Framework\TestCase;
use TruthTable\TruthTable;

class TruthTableTest extends TestCase
{
    /**
     * @test
     */
    public function build()
    {
        $tt = (new TruthTable(2))->get();

        $expected = [
            [0, 0],
            [0, 1],
            [1, 0],
            [1, 1],
        ];

        $this->assertEquals($expected, $tt);
    }
}
