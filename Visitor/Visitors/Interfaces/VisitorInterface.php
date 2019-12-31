<?php

namespace Visitor\Visitors\Interfaces;

use Visitor\Component\FileSystem;

interface VisitorInterface
{
    public function visit(FileSystem $filesystem);
}
