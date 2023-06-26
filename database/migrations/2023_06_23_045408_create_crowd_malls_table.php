<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrowdMallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crowd_malls', function (Blueprint $table) {
            $table->id();
            $table->text('company_name')->nullable();
            $table->longText('brands')->nullable();
            $table->text('reg_com_address_link_one')->nullable();
            $table->text('reg_com_address_link_two')->nullable();
            $table->text('post_code')->nullable();
            $table->text('country')->nullable();
            $table->text('contact_person_first_name')->nullable();
            $table->text('contact_person_last_name')->nullable();
            $table->text('contact_number')->nullable();
            $table->text('email')->nullable();
            $table->text('business_reg_no')->nullable();
            $table->text('business_category')->nullable();
            $table->text('market_place')->nullable();
            $table->text('tax_amount')->nullable();
            $table->text('voucher_code')->nullable();
            $table->text('file')->nullable();
            $table->text('bank_name')->nullable();
            $table->text('bank_account_name')->nullable();
            $table->text('bank_account_no')->nullable();
            $table->text('bank_branch_code')->nullable();
            $table->text('bank_shift_code')->nullable();
            $table->text('shareholder_first_name')->nullable();
            $table->text('shareholder_last_name')->nullable();
            $table->text('shareholder_identity_pass_no')->nullable();
            $table->text('shareholder_contact_no')->nullable();
            $table->text('shareholder_bank_account_no')->nullable();
            $table->text('shareholder_bank_branch_code')->nullable();
            $table->string('shareholder_email')->nullable();
            $table->string('agree')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crowd_malls');
    }
}
