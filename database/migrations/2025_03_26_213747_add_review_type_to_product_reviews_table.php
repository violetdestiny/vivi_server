<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('product_reviews', function (Blueprint $table) {
            // First add the type column if it's needed
            if (!Schema::hasColumn('product_reviews', 'type')) {
                $table->string('type')->nullable();
            }

            // Then add review_type after it
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
