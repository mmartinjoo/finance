<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\IncomeStatement;
use App\Models\Metric;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->seedApple();
        $this->seedMicrosoft();
    }

    private function seedApple(): void
    {
        $aapl = Company::create([
            'ticker' => 'AAPL',
            'name' => 'Apple Inc.',
            'price_per_share' => 149.64 * 100,
            'market_cap' => 2420000,
        ]);

        IncomeStatement::create([
            'company_id' => $aapl->id,
            'year' => 2022,
            'revenue' => 386017,
            'cost_of_revenue' => 218786,
            'gross_profit' => 167231,
            'operating_expenses' => 47852,
            'operating_profit' => 119379,
            'interest_expense' => 6,
            'income_tax_expense' => 17062,
            'net_income' => 101935,
            'eps' => 620,
        ]);

        Metric::create([
            'company_id' => $aapl->id,
            'year' => 2022,
            'gross_margin' => 0.4347,
            'operating_margin' => 0.3081,
            'profit_margin' => 0.2570,
            'pe_ratio' => 2432,
        ]);
    }

    private function seedMicrosoft(): void
    {
        $msft = Company::create([
            'ticker' => 'MSFT',
            'name' => 'Microsoft Inc.',
            'price_per_share' => 273.24 * 100,
            'market_cap' => 2040000,
        ]);

        IncomeStatement::create([
            'company_id' => $msft->id,
            'year' => 2022,
            'revenue' => 192557,
            'cost_of_revenue' => 60212,
            'gross_profit' => 132345,
            'operating_expenses' => 50401,
            'operating_profit' => 81944,
            'interest_expense' => -65,
            'income_tax_expense' => 10178,
            'net_income' => 72456,
            'eps' => 965,
        ]);

        Metric::create([
            'company_id' => $msft->id,
            'year' => 2022,
            'gross_margin' => 0.6836,
            'operating_margin' => 0.4125,
            'profit_margin' => 0.3388,
            'pe_ratio' => 2851,
        ]);
    }
}
