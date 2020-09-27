<?php

namespace TruthTable;

class TruthTable
{
    protected $n;

    protected $table = [];

    public function __construct(int $n)
    {
        $this->n = $n;
    }

    public function get()
    {
        return $this->table;
    }

    protected function build()
    {
        // TODO

        return $this;
    }
}
