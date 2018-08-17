<?php
/**
 * Created by PhpStorm.
 * User: skugubaev
 * Date: 17.08.18
 * Time: 16:42
 */

namespace Skugubaev\Stratagy;


class DivsOperation implements OperationInterface
{

    /**
     * @param int $a First number
     * @param int $b Second number
     * @return int division a / b
     * @throws \Exception if there is division by zero
     */
    public function calc(int $a, int $b): int
    {
        if (!$b) {
            throw new \Exception('division by zero');
        }
        return floor($a/$b);
    }
}