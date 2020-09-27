<?php

namespace TruthTable;

class TruthTable
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

    public function setFalse(int $n)
    {
        $this->result[$n] = false;
    }

    public function setTrue(int $n)
    {
        $this->result[$n] = true;
    }

    protected function build()
    {
        for ($i = 0; $i < pow(2, $this->n); $i++) {
            $bin = decbin($i);
            $padded = str_pad($bin, $this->n, '0', STR_PAD_LEFT);
            $this->table[] = str_split($padded);
            $this->result[] = 0;
        }

        return $this;
    }
}
