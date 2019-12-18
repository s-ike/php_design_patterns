<?php

namespace Interpreter\Expression;

use Interpreter\Context\Context;
use Interpreter\Expression\Interfaces\ExpressionInterface;

class CalcExpression implements ExpressionInterface
{
    public function execute(Context $context)
    {
        $command = $context->getCommand();
        // echo $command;

        if (preg_match('/(\d+)(?:\s*)([\+\-\*\/])(?:\s*)(\d+)/', $command, $matches) !== false) {
            $operator = $matches[2];

            $p = 0;
            switch ($operator) {
                case '+':
                    $p = $matches[1] + $matches[3];
                    break;
                case '-':
                    $p = $matches[1] - $matches[3];
                    break;
                case '*':
                    $p = $matches[1] * $matches[3];
                    break;
                case '/':
                    $p = $matches[1] / $matches[3];
                    break;
            }
            return $p;
        } else {
            return null;
        }
    }
}
