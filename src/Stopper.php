<?php


namespace MaxBrokman\SafeQueue;

class Stopper
{
    public function stop($status = 0)
    {
        exit($status); //@codeCoverageIgnore
    }
}
