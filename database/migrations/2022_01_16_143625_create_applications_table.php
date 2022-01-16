<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('role_current_id')->unsigned();
            $table->foreign('role_current_id')->references('id')->on('roles')->onDelete('cascade');
            $table->integer('role_request_id')->unsigned();
            $table->foreign('role_request_id')->references('id')->on('roles')->onDelete('cascade');
            $table->integer('category_current')->default(0);
            $table->timestamp('expired_at');
            $table->string('order_info');
            $table->timestamp('order_date');
            $table->integer('experience_total');
            $table->integer('experience_role');
            $table->integer('experience_org');
            $table->integer('category_request')->default(0);
            $table->boolean('agreement_procedure');
            $table->boolean('agreement_personal_data');
            $table->timestamp('given_at');
            $table->boolean('error')->default(false);
            $table->timestamp('accepted_at');
            $table->timestamp('uploaded_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->dropForeign('applications_user_id_foreign');
            $table->dropForeign('applications_role_current_id_foreign');
            $table->dropForeign('applications_role_request_id_foreign');
        });

        Schema::dropIfExists('applications');
    }
}
