<?php

namespace TruthTable;

class BinaryTable extends AbstractTruthTable
{
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
