<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
        });

        DB::table('roles')->insert([
            ['name' => 'Воспитатель'],
            ['name' => 'Инструктор-методист'],
            ['name' => 'Инструктор по труду'],
            ['name' => 'Инструктор по физической культуре'],
            ['name' => 'Концертмейстер'],
            ['name' => 'Педагог-психолог'],
            ['name' => 'Мастер производственного обучения'],
            ['name' => 'Методист'],
            ['name' => 'Музыкальный руководитель'],
            ['name' => 'Педагог дополнительного образования'],
            ['name' => 'Педагог-библиотекарь'],
            ['name' => 'Педагог-организатор'],
            ['name' => 'Преподаватель'],
            ['name' => 'Преподаватель-организатор основ безопасности жизнедеятельности'],
            ['name' => 'Руководитель физического воспитания'],
            ['name' => 'Социальный педагог'],
            ['name' => 'Старший вожатый'],
            ['name' => 'Старший воспитатель'],
            ['name' => 'Старший инструктор-методист'],
            ['name' => 'Старший методист'],
            ['name' => 'Старший педагог дополнительного образования'],
            ['name' => 'Старший тренер-преподаватель'],
            ['name' => 'Тренер-преподаватель'],
            ['name' => 'Тьютор'],
            ['name' => 'Учитель-дефектолог'],
            ['name' => 'Учитель-логопед'],
            ['name' => 'Учитель математики'],
       ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
