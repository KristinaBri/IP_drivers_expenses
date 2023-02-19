<?php

namespace App\Services;

class DriverExpenseService
{
    public function calculateDriverExpenses(array $drivers, array $expenses)
    {
        $result = [];

        $totalDrivers = count($drivers); //turim 2 vairuotojus

        foreach ($expenses as $expense => $amount) {
            $isDivisible = ($amount % 2 === 0) ? true : false; //tikrinam ar suma pasidalina is 2 be liekanos

            if ($isDivisible) {
                $result[$drivers[0]][$expense] = $amount / $totalDrivers;  //kai suma graziai pasidalina is 2
                $result[$drivers[1]][$expense] = $amount / $totalDrivers;

            } else {
                $result[$drivers[0]][$expense] = ceil(($amount * 100)/$totalDrivers) / 100;
                $result[$drivers[1]][$expense] = floor(($amount * 100)/$totalDrivers) / 100;
            }
        }

        return $result;
    }
}
