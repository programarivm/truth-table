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
}
