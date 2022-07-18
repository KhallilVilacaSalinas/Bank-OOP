<?php

use Alura\Bank\Model\Employee;

class bonusController
{
    private float $totalBonus = 0.0;

    public function addBonus(Employee $employee)
    {
        $this->totalBonus += $employee->calculatebonus();
    }
}