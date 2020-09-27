<?php

namespace TruthTable\Tests\Unit;

use PHPUnit\Framework\TestCase;
use TruthTable\TruthTable;

class TruthTableTest extends TestCase
{
    /**
     * @dataProvider getTableData
     * @test
     */
    public function get_table($n, $expected)
    {
        $t = (new TruthTable($n))->getTable();

        $this->assertEquals($expected, $t);
    }

    /**
     * @dataProvider getResultData
     * @test
     */
    public function get_result($n, $expected)
    {
        $r = (new TruthTable($n))->getResult();

        $this->assertEquals($expected, $r);
    }

    /**
     * @dataProvider setTrueData
     * @test
     */
    public function set_true($n, $i, $expected)
    {
        $r = (new TruthTable($n))
                ->setTrue($i)
                ->getResult();

        $this->assertEquals($expected, $r);
    }

    public function getTableData()
    {
        return [
            [
                2, [
                    [0, 0],
                    [0, 1],
                    [1, 0],
                    [1, 1],
                ],
                3, [
                    [0, 0, 0],
                    [0, 0, 1],
                    [0, 1, 0],
                    [0, 1, 1],
                    [1, 0, 0],
                    [1, 0, 1],
                    [1, 1, 0],
                    [1, 1, 1],
                ],
            ],
        ];
    }

    public function getResultData()
    {
        return [
            [
                2, [
                    0,
                    0,
                    0,
                    0,
                ],
                3, [
                    0,
                    0,
                    0,
                    0,
                    0,
                    0,
                    0,
                    0,
                ],
            ],
        ];
    }

    public function setTrueData()
    {
        return [
            [
                2, 0, [
                    1,
                    0,
                    0,
                    0,
                ],
                2, 1, [
                    0,
                    1,
                    0,
                    0,
                ],
            ],
        ];
    }
}
