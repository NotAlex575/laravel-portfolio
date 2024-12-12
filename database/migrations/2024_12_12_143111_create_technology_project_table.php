<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('technology_project', function (Blueprint $table) {
            $table->unsignedBigInteger("technology_id");
            $table->foreign("technology_id")->references("id")->on("technology");

            $table->unsignedBigInteger("project_id");
            $table->foreign("project_id")->references("id")->on("project");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('technology_project', function (Blueprint $table) {
            $table->dropForeign(['technology_id']);
            $table->dropForeign(['project_id']);
        });

        Schema::dropIfExists('technology_project');
    }
};
