<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_of_employed', function (Blueprint $table) {
            $table->id();
            $table->string('district_or_region')->comment('地區別');
            $table->integer('total_thousand')->comment('總計 (千人)');
            $table->integer('junior_high_below_total')->comment('國中及以下合計 (千人)');
            $table->integer('junior_high_below_primary_total')->comment('國小及以下 (千人)');
            $table->integer('junior_high_total')->comment('國中 (千人)');
            $table->integer('senior_high_total')->comment('高級中等 (千人)');
            $table->integer('junior_college_above_total')->comment('大專及以上合計 (千人)');
            $table->integer('junior_college_total')->comment('專科 (千人)');
            $table->integer('university_total')->comment('大學 (千人)');
            $table->integer('graduate_school_total')->comment('研究所 (千人)');
            $table->integer('age_15_24_total')->comment('年齡 15-24歲合計 (千人)');
            $table->integer('age_15_19')->comment('15-19歲 (千人)');
            $table->integer('age_20_24')->comment('20-24歲 (千人)');
            $table->integer('age_25_44_total')->comment('年齡 25-44歲合計 (千人)');
            $table->integer('age_25_29')->comment('25-29歲 (千人)');
            $table->integer('age_30_34')->comment('30-34歲 (千人)');
            $table->integer('age_35_39')->comment('35-39歲 (千人)');
            $table->integer('age_40_44')->comment('40-44歲 (千人)');
            $table->integer('age_45_64_total')->comment('年齡 45-64歲合計 (千人)');
            $table->integer('age_45_49')->comment('45-49歲 (千人)');
            $table->integer('age_50_54')->comment('50-54歲 (千人)');
            $table->integer('age_55_59')->comment('55-59歲 (千人)');
            $table->integer('age_60_64')->comment('60-64歲 (千人)');
            $table->integer('age_65_above_total')->comment('年齡 65歲及以上 (千人)');
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
        Schema::dropIfExists('education_of_employed');
    }
}
