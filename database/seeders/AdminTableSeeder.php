<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\{Schema, DB};
class AdminTableSeeder extends Seeder {
    public function run() {
        Schema::disableForeignKeyConstraints();
        DB::table('admins')->truncate();
        Admin::factory()->create([
            'name' => 'Mostafa Ali',
            'email' => 'admin@app.com',
            'password' => bcrypt('123123'),
            'status' => 1,
        ]);
        Admin::factory()->count(10)->create();
        Schema::enableForeignKeyConstraints();
    }
}