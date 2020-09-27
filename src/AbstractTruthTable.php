<?php

namespace TruthTable;

abstract class AbstractTruthTable
{
    protected $n;

    protected $table = [];

    protected $result = [];

    public function __construct(int $n)
    {
        $this->n = $n;

        $this->build();
    }

    public function getTable()
    {
        return $this->table;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function setFalse(int $i)
    {
        $this->result[$i] = 0;

        return $this;
    }

    public function setTrue(int $i)
    {
        $this->result[$i] = 1;

        return $this;
    }

    abstract protected function build();
}
