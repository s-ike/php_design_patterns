<?php

namespace Visitor\Visitors;

use Visitor\Component\FileSystem;
use Visitor\Visitors\Interfaces\VisitorInterface;

class CountVisitor implements VisitorInterface
{
    private $directories_cnt = 0;
    private $files_cnt = 0;

    public function visit(FileSystem $filesystem)
    {
        $class = basename(strtr(get_class($filesystem), '\\', '/'));
        switch ($class) {
            case 'Dir':
                $this->directories_cnt++;
                break;

            case 'File':
                $this->files_cnt++;
                break;
        }
        foreach ($filesystem->getChildren() as $child) {
            $this->visit($child);
        }
    }

    public function getDirectoriesCnt() :int
    {
        return $this->directories_cnt;
    }

    public function getFilesCnt() :int
    {
        return $this->files_cnt;
    }
}
