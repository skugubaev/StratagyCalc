<?php
/**
 * Created by PhpStorm.
 * User: skugubaev
 * Date: 17.08.18
 * Time: 16:20
 */

namespace Skugubaev\Stratagy;

class Calculator {

    /** @var OperationInterface */
    private $stratagy;

    /**
     * Calculator constructor.
     * @param string $operation
     */
    public function __construct(string $operation)
    {
        $this->stratagy = $this->getStratagy($operation);
    }

    /**
     * @param string $operation
     * @return OperationInterface
     * @throws \Exception
     */
    private function getStratagy(string $operation): OperationInterface
    {
        switch ($operation)
        {
            case '+' : return new PlusOperation();
            case '-' : return new SubsOperation();
            case '*' : return new MultOperation();
            case '/' : return new DivsOperation();
            default  : throw new \Exception('unknown operation');
        }
    }

    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function calc(int $a, int $b): int
    {
        return $this->stratagy->calc($a, $b);
    }
}