<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Models\Repository;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('repository', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name', 255);
                $table->tinyInteger('directory')->default(0);
                $table->foreignIdFor(Repository::class, 'parent_id')->nullable();
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
        Schema::dropIfExists('repository');
    }
};
