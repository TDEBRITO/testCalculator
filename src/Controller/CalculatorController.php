<?php

namespace App\Controller;

use App\Entity\Calculator;
use App\Form\CalculatorType;
use App\Handler\CalculatorHandler;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController extends AbstractController
{
    /**
     * @var CalculatorHandler
     */
    private $handler;

    public function __construct(CalculatorHandler $handler)
    {
        $this->handler = $handler;
    }

    /**
     * @Route("/calculator", name="calculator")
     */
    public function calculatorAction(Request $request)
    {
        $calculator = new Calculator();
        $form = $this->createForm(CalculatorType::class, $calculator);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $result = $this->handler->handleCalculation($form->getData());
            }
        }

        return $this->render('calculator-form.html.twig', [
            'form' => $form->createView(),
            'result' => $result ?? null,
        ]);
    }
}
