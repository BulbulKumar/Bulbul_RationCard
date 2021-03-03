<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRationCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ration_cards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
    
            $table->integer('Registration_no');
            $table->integer('ration_card_no');
            $table->integer('Address_Door_number');
            $table->string('Address_sub_locality_1');
            $table->string('Address_sub_locality_2');
            $table->integer('Address_ward_number');
            $table->string('Address_location');
            $table->string('Address_select_sub_District');
            $table->string('Address_District');
            $table->string('Address_state');
            $table->string('Address_pin_code');
            $table->string('Address_country');
            $table->string('Address_police_Station');
            $table->string('Address_post_office');
            $table->string('Name');
            $table->string('Gender');
            $table->string('father_name');
            $table->string('Mother_name');
            // $table->string('Date_Birth');
            $table->date('Date_Birth');
            $table->string('Age_each_member_family');
            $table->string('Relation_karta_family');
            $table->string('Monthly_income_karta')->nullable();
            $table->string('Occupation');
            $table->string('Religion');
            $table->string('Electricity_Connection');
            $table->string('Cooking_Gas_Connection');
            $table->string('photo');
            $table->string('Electoral_id');
            $table->string('Education_Certificate');
            $table->string('Work_Experience');
            $table->string('Medical_Certificate');
            // $table->string('aadha');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ration_cards');
    }
}
