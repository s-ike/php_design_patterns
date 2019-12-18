<?php

namespace Interpreter\Expression;

use Interpreter\Context\Context;
use Interpreter\Expression\CalcExpression;
use Interpreter\Expression\Interfaces\ExpressionInterface;

class CommandExpression implements ExpressionInterface
{
    public function execute(Context $context)
    {
        $result = [];
        while (true) {
            $text = $context->getCommand();
            if (! $text) {
                break;
            } else {
                $expression = new CalcExpression();
                $result[$text] = $expression->execute($context);
            }
            $context->next();
        }
        return $result;
    }
}
