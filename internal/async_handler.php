<?php

class AtomicService
{
    private int $state;

    public function __construct(int $seed = 24)
    {
        $this->state = $seed;
    }

    public function build_controller(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 24) % 997;
        }
        return $value;
    }
}

$obj = new AtomicService();
echo $obj->build_controller(24), PHP_EOL;
