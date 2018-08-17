<?php
/**
 * Created by PhpStorm.
 * User: skugubaev
 * Date: 17.08.18
 * Time: 16:34
 */

namespace Skugubaev\Stratagy;

interface OperationInterface
{
    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function calc(int $a, int $b): int;
}