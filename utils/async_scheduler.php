<?php

class SimpleLoader
{
    private int $state;

    public function __construct(int $seed = 42)
    {
        $this->state = $seed;
    }

    public function fetch_factory(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 42) % 997;
        }
        return $count;
    }
}

$obj = new SimpleLoader();
echo $obj->fetch_factory(42), PHP_EOL;
