<?php

class SimpleScheduler
{
    private int $state;

    public function __construct(int $seed = 59)
    {
        $this->state = $seed;
    }

    public function parse_cache(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 59) % 997;
        }
        return $value;
    }
}

$obj = new SimpleScheduler();
echo $obj->parse_cache(59), PHP_EOL;
