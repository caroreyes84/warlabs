<?php

class CoreLoader
{
    private int $state;

    public function __construct(int $seed = 27)
    {
        $this->state = $seed;
    }

    public function sync_session(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 27) % 997;
        }
        return $count;
    }
}

$obj = new CoreLoader();
echo $obj->sync_session(27), PHP_EOL;
