<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdoptionApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoption_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cat_id')->constrained()->onDelete('cascade');
            $table->string('applicant_name');
            $table->string('applicant_email');
            $table->string('applicant_phone');
            $table->text('applicant_address');
            $table->string('applicant_city');
            $table->string('applicant_state');
            $table->string('applicant_zip');
            $table->text('adoption_reason');
            $table->text('pet_experience')->nullable();
            $table->enum('living_situation', ['apartment', 'house', 'condo', 'other']);
            $table->boolean('landlord_permission')->default(false);
            $table->boolean('other_pets')->default(false);
            $table->text('other_pets_details')->nullable();
            $table->text('vet_reference')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->string('ip_address');
            $table->timestamps();

            // Optional: Add indexes for better performance
            $table->index('status');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adoption_applications');
    }
}
