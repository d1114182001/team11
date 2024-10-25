<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopulationsEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('populations_educations', function (Blueprint $table) {
            $table->id();
            $table->string('region', 100)->comment('地區名稱');  // 地區名稱
            $table->integer('total')->comment('總人口（千人）');  // 總人口
            $table->integer('edu_jr_high_below_total')->comment('國中及以下總數（千人）');  // 國中及以下總數
            $table->integer('edu_primary_below')->comment('國小及以下總數（千人）');  // 國小及以下總數
            $table->integer('edu_jr_high')->comment('國中總數（千人）');  // 國中總數
            $table->integer('edu_senior_high_voc')->comment('高中/高職總數（千人）');  // 高中/高職總數
            $table->integer('edu_college_above_total')->comment('大專及以上總數（千人）');  // 大專及以上總數
            $table->integer('edu_junior_college')->comment('專科總數（千人）');  // 專科總數
            $table->integer('edu_university')->comment('大學總數（千人）');  // 大學總數
            $table->integer('edu_grad_school')->comment('研究所總數（千人）');  // 研究所總數
            $table->integer('age_15_24_total')->comment('15-24歲總數（千人）');  // 15-24歲總數
            $table->integer('age_15_19')->comment('15-19歲總數（千人）');  // 15-19歲總數
            $table->integer('age_20_24')->comment('20-24歲總數（千人）');  // 20-24歲總數
            $table->integer('age_25_44_total')->comment('25-44歲總數（千人）');  // 25-44歲總數
            $table->integer('age_25_29')->comment('25-29歲總數（千人）');  // 25-29歲總數
            $table->integer('age_30_34')->comment('30-34歲總數（千人）');  // 30-34歲總數
            $table->integer('age_35_39')->comment('35-39歲總數（千人）');  // 35-39歲總數
            $table->integer('age_40_44')->comment('40-44歲總數（千人）');  // 40-44歲總數
            $table->integer('age_45_64_total')->comment('45-64歲總數（千人）');  // 45-64歲總數
            $table->integer('age_45_49')->comment('45-49歲總數（千人）');  // 45-49歲總數
            $table->integer('age_50_54')->comment('50-54歲總數（千人）');  // 50-54歲總數
            $table->integer('age_55_59')->comment('55-59歲總數（千人）');  // 55-59歲總數
            $table->integer('age_60_64')->comment('60-64歲總數（千人）');  // 60-64歲總數
            $table->integer('age_65_above')->comment('65歲及以上總數（千人）');  // 65歲及以上總數
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
        Schema::dropIfExists('populations_educations');
    }
}
