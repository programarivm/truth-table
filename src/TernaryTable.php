<?php

namespace TruthTable;

class TernaryTable extends AbstractTruthTable
{
    public function setUnknown(int $i)
    {
        $this->result[$i] = 2;

        return $this;
    }

    protected function build()
    {
        for ($i = 0; $i < pow(3, $this->n); $i++) {
            $three = base_convert($i, 10, 3);
            $padded = str_pad($three, $this->n, '0', STR_PAD_LEFT);
            $this->table[] = str_split($padded);
            $this->result[] = 2;
        }

        return $this;
    }
}
