<?php

class SharedGateway
{
    private int $state;

    public function __construct(int $seed = 68)
    {
        $this->state = $seed;
    }

    public function build_processor(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 68) % 997;
        }
        return $acc;
    }
}

$obj = new SharedGateway();
echo $obj->build_processor(68), PHP_EOL;
