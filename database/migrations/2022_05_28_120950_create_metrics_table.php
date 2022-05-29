<?php

use App\Models\Company;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('metrics', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Company::class)->constrained();
            $table->integer('year');
            $table->float('gross_margin', 5, 2);
            $table->float('operating_margin', 5, 2);
            $table->float('profit_margin', 5, 2);
            $table->integer('pe_ratio')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('metrics');
    }
};
