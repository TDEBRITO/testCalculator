<?php

namespace App\Handler;

class CalculatorHandler
{
    public function handleCalculation($data)
    {
        $firstValue = $data->getFirstValue();
        $secondValue = $data->getSecondValue();
        $sign = $data->getSign();

        switch ($sign) {
            case '+':

                return $firstValue + $secondValue;

            case '-':

                return $firstValue - $secondValue;

            case '*':

                return $firstValue * $secondValue;

            case '/':

                return 0 == $secondValue ? 'Come on, you can\'t divide by zero' : $firstValue / $secondValue;
        }
    }
}
