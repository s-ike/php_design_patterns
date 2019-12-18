<?php

namespace Interpreter\Expression\Interfaces;

use Interpreter\Context\Context;

interface ExpressionInterface
{
    public function execute(Context $context);
}
