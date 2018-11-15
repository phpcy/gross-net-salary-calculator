<?php

namespace Phpcy\GrossNetSalaryCalculator\Tests;

use Phpcy\GrossNetSalaryCalculator\Calculator;
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    /**
     * @var Calculator
     */
    private $calculator;

    public function setUp()
    {
        parent::setUp();
        $this->calculator = new Calculator();
    }

    /**
     * @test
     * @dataProvider grossSalariesProvider
     * @param int $grossMonthlyAmount
     * @param int $expectedNetAnnualAmount
     * @param int $taxes
     */
    public function calculateNetGrossSalaries(int $grossMonthlyAmount, int $expectedNetAnnualAmount, int $taxes)
    {
        $result = $this->calculator->calculateNetSalary($grossMonthlyAmount, 12);
        $this->assertSame($expectedNetAnnualAmount, (int)$result->getAnnualNetSalary());
        $this->assertSame($taxes, (int)$result->getTaxes());
    }

    /**
     * @return array
     */
    public function grossSalariesProvider(): array
    {
        return [
            '12000_annually_gross' => [
                'gross_monthly_salary' => 1000,
                'net_annual_salary' => 11064,
                'taxes' => 0,
            ],
            '24000_annually_gross' => [
                'gross_monthly_salary' => 2200,
                'net_annual_salary' => 23399,
                'taxes' => 941,
            ],
        ];
    }
}
