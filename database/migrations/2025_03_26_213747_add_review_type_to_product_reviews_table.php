<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('product_reviews', function (Blueprint $table) {
            $table->enum('review_type', ['product', 'cafe', 'service', 'website'])
                ->default('product')
                ->after('type');
        });
    }

    public function down()
    {
        Schema::table('product_reviews', function (Blueprint $table) {
            $table->dropColumn('review_type');
        });
    }
};
