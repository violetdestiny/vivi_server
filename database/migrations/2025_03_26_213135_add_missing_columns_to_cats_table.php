<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('cats', function (Blueprint $table) {
            // Only add columns that don't exist
            if (!Schema::hasColumn('cats', 'available_for_adoption')) {
                $table->boolean('available_for_adoption')->default(true);
            }
            if (!Schema::hasColumn('cats', 'is_friendly')) {
                $table->boolean('is_friendly')->default(false);
            }
            if (!Schema::hasColumn('cats', 'is_playful')) {
                $table->boolean('is_playful')->default(false);
            }
            if (!Schema::hasColumn('cats', 'is_affectionate')) {
                $table->boolean('is_affectionate')->default(false);
            }
        });
    }

    public function down()
    {
        Schema::table('cats', function (Blueprint $table) {
            $table->dropColumn([
                'available_for_adoption',
                'is_friendly',
                'is_playful',
                'is_affectionate'
            ]);
        });
    }
};
