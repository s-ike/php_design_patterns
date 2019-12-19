<?php

namespace IteratorUsingPhpSpl\Iterator;

use FilterIterator;

class JobFilterIterator extends FilterIterator
{
    private $fileter_job;

    public function __construct($iterator, $job)
    {
        parent::__construct($iterator);
        $this->fileter_job = $job;
    }

    public function accept() :bool
    {
        $engineer = $this->getInnerIterator()->current();
        if (strcasecmp($engineer->getJob(), $this->fileter_job) == 0) {
            return false;
        }
        return true;
    }
}
