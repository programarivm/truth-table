<?php

namespace TruthTable;

class TruthTable
{
    protected $n;

    protected $table = [];

    public function __construct(int $n)
    {
        $this->n = $n;

        $this->build();
    }

    public function get()
    {
        return $this->table;
    }

    protected function build()
    {
        for ($i = 0; $i < pow(2, $this->n); $i++) {
            $bin = decbin($i);
            $padded = str_pad($bin, $this->n, '0', STR_PAD_LEFT);
            $this->table[] = str_split($padded);
        }

        return $this;
    }
}
