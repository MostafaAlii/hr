<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up() {
        Schema::create('setting_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale');
            $table->string('name', 100);
            $table->string('address', 150);
            $table->string('description', 255);
            $table->mediumText('maintenance_message', 255);
            $table->unique(['setting_id', 'locale']);
            $table->index(['setting_id', 'locale', 'name']);
            $table->foreignId('setting_id')->constrained()->cascadeOnDelete();
        });
    }

    public function down() {
        Schema::dropIfExists('setting_translations');
    }
};
