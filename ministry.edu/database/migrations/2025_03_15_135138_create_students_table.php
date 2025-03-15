<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('unid'); // رقم الاستمارة
            $table->string('n1', 20);
            $table->string('n2', 20);
            $table->string('n3', 20);
            $table->string('n4', 20);
            $table->string('school', 70);
            $table->bigInteger('code'); // كود القسم بالجامعة
            $table->string('depetname', 70); // اسم القسم
            $table->string('college', 70); // الكلية
            $table->string('addtype', 20); // نوع القبول
            $table->string('wlaaee', 10); // ولائي أو عام
            $table->integer('addyear'); // سنة القبول
            $table->string('degree', 15); // الدرجة العلمية
            $table->boolean('Reg')->default(0); // حالة التسجيل
            $table->foreignId('university_id')->constrained('universities')->onDelete('cascade'); // مفتاح أجنبي
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
        Schema::dropIfExists('students');
    }
};
