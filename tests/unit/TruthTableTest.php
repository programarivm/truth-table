<?php

namespace TruthTable\Tests\Unit;

use PHPUnit\Framework\TestCase;
use TruthTable\TruthTable;

class TruthTableTest extends TestCase
{
    /**
     * @test
     */
    public function get_table_2()
    {
        $t = (new TruthTable(2))->getTable();

        $expected = [
            [0, 0],
            [0, 1],
            [1, 0],
            [1, 1],
        ];

        $this->assertEquals($expected, $t);
    }

    /**
     * @test
     */
    public function get_result_2()
    {
        $r = (new TruthTable(2))->getResult();

        $expected = [
            0,
            0,
            0,
            0,
        ];

        $this->assertEquals($expected, $r);
    }

    /**
     * @test
     */
    public function get_table_3()
    {
        $t = (new TruthTable(3))->getTable();

        $expected = [
            [0, 0, 0],
            [0, 0, 1],
            [0, 1, 0],
            [0, 1, 1],
            [1, 0, 0],
            [1, 0, 1],
            [1, 1, 0],
            [1, 1, 1],
        ];

        $this->assertEquals($expected, $t);
    }

    /**
     * @test
     */
    public function get_result_3()
    {
        $r = (new TruthTable(3))->getResult();

        $expected = [
            0,
            0,
            0,
            0,
            0,
            0,
            0,
            0,
        ];

        $this->assertEquals($expected, $r);
    }
}
