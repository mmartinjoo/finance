<?php

use App\Models\Company;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('income_statements', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Company::class)->constrained();
            $table->integer('year');
            $table->integer('revenue');
            $table->integer('cost_of_revenue');
            $table->integer('gross_profit');
            $table->integer('operating_expenses');
            $table->integer('operating_profit');
            $table->integer('interest_expense');
            $table->integer('income_tax_expense');
            $table->integer('net_income');
            $table->integer('eps');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('income_statements');
    }
};
