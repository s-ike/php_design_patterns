<?php

namespace Visitor\Visitors;

use Visitor\Component\FileSystem;
use Visitor\Visitors\Interfaces\VisitorInterface;

class DumpVisitor implements VisitorInterface
{
    public function visit(FileSystem $filesystem)
    {
        $class = basename(strtr(get_class($filesystem), '\\', '/'));
        switch ($class) {
            case 'Dir':
                echo '';
                break;

            case 'File':
                echo '&nbsp;&nbsp;';
                break;
        }
        echo $filesystem->getName(), "<br>\n";

        foreach ($filesystem->getChildren() as $child) {
            $this->visit($child);
        }
    }
}
