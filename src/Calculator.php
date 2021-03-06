<?php

declare(strict_types=1);

namespace Phpcy\GrossNetSalaryCalculator;

final class Calculator
{
    public function calculateNetSalary(int $grossSalary, int $months): Calculations
    {
        $annualGrossSalary = $months * $grossSalary;

        $taxedAnnualGrossSalary = $annualGrossSalary - (($annualGrossSalary * 7.8) / 100) - 132;

        $taxes = $this->calculateTaxes($taxedAnnualGrossSalary);

        $socialInsurances = (($annualGrossSalary * 0.078) >= 4243) ? 4243 : ($annualGrossSalary * 0.078);

        $annualNetSalary = $annualGrossSalary - $taxes - $socialInsurances;

        return new Calculations($annualGrossSalary, $annualNetSalary, $socialInsurances, $taxes, $months);
    }

    private function calculateTaxes(float $annualGrossSalary): float
    {
        if ($annualGrossSalary <= 19500) {
            return 0;
        }

        if ($annualGrossSalary <= 28000) {
            return ($annualGrossSalary - 19500) * 0.20;
        }

        if ($annualGrossSalary <= 36300) {
            return
                ((28000 - 19500) * 0.20) +
                (($annualGrossSalary - 28000) * 0.25);
        }

        if ($annualGrossSalary <= 60000) {
            return
                ((28000 - 19500) * 0.20) +
                ((36300 - 28000) * 0.25) +
                (($annualGrossSalary - 36300) * 0.30);
        }

        return
            ((28000 - 19500) * 0.20) +
            ((36300 - 28000) * 0.25) +
            ((60000 - 36300) * 0.30) +
            (($annualGrossSalary - 60000) * 0.35);
    }
}
