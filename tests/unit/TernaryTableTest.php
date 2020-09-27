<?php

namespace TruthTable\Tests\Unit;

use PHPUnit\Framework\TestCase;
use TruthTable\TernaryTable;

class TernaryTableTest extends TestCase
{
    /**
     * @dataProvider getTableData
     * @test
     */
    public function get_table($n, $expected)
    {
        $t = (new TernaryTable($n))->getTable();

        $this->assertEquals($expected, $t);
    }

    /**
     * @dataProvider getResultData
     * @test
     */
    public function get_result($n, $expected)
    {
        $r = (new TernaryTable($n))->getResult();

        $this->assertEquals($expected, $r);
    }

    /**
     * @dataProvider setUnknownData
     * @test
     */
    public function set_unknown($n, $i, $expected)
    {
        $r = (new TernaryTable($n))
                ->setUnknown($i)
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
                    [0, 2],
                    [1, 0],
                    [1, 1],
                    [1, 2],
                    [2, 0],
                    [2, 1],
                    [2, 2],
                ],
                3, [
                    [0, 0, 0],
                    [0, 0, 1],
                    [0, 0, 2],
                    [0, 1, 0],
                    [0, 1, 1],
                    [0, 1, 2],
                    [0, 2, 0],
                    [0, 2, 1],
                    [0, 2, 2],
                    [1, 0, 0],
                    [1, 0, 1],
                    [1, 0, 2],
                    [1, 1, 0],
                    [1, 1, 1],
                    [1, 1, 2],
                    [1, 2, 0],
                    [1, 2, 1],
                    [1, 2, 2],
                    [2, 0, 0],
                    [2, 0, 1],
                    [2, 0, 2],
                    [2, 1, 0],
                    [2, 1, 1],
                    [2, 1, 2],
                    [2, 2, 0],
                    [2, 2, 1],
                    [2, 2, 2],
                ],
            ],
        ];
    }

    public function getResultData()
    {
        return [
            [
                2, [
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                ],
                3, [
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                ],
            ],
        ];
    }

    public function setUnknownData()
    {
        return [
            [
                2, 0, [
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                ],
            ],
        ];
    }
}
