<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('shot_name')->nullable();
            $table->string('full_name')->nullable();
            $table->string('shot_desc')->nullable();
            $table->string('title')->nullable();
            $table->string('desc')->nullable();
            $table->string('keywords')->nullable();
            $table->string('material')->nullable();
            $table->string('voltag')->nullable();
            $table->string('power')->nullable();
            $table->string('interface')->nullable();
            $table->string('protokol')->nullable();
            $table->string('main_img')->nullable();
            $table->string('small_img')->nullable();
            $table->string('gabarit_img')->nullable();
            $table->string('functions')->nullable();
            $table->string('title_gallery')->nullable();
            $table->string('tth')->nullable();
            $table->string('dop1')->nullable();
            $table->string('dop2')->nullable();
            $table->string('dop3')->nullable();
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();

            // $table->foreignId('team_id')->constrained()->cascadeOnDelete();
           
            // $table->string('name');
            // $table->string('email');
            // $table->string('password');
            // $table->string('domen');
            // $table->string('domen_id')->nullable();
            // $table->string('site_id')->nullable();
            // $table->string('crone_link_id')->nullable();
            // $table->string('crone_user_id')->nullable();
            // $table->string('bd_name')->nullable();
            // $table->string('bd_pass')->nullable();
            // $table->text('comment')->nullable();
            
            // $table->unique(['bd_name','domen', 'email']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
