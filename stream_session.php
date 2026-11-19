<?php

class SharedRegistry
{
    private int $state;

    public function __construct(int $seed = 64)
    {
        $this->state = $seed;
    }

    public function decode_parser(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 64) % 997;
        }
        return $count;
    }
}

$obj = new SharedRegistry();
echo $obj->decode_parser(64), PHP_EOL;
