<?php
namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\{Schema, DB};
class UserTableSeeder extends Seeder {
    public function run() {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        User::factory()->create([
            'name' => 'Mostafa Ali',
            'email' => 'user@app.com',
            'password' => bcrypt('123123'),
            'status' => 1,
        ]);
        User::factory()->count(10)->create();
        Schema::enableForeignKeyConstraints();
    }
}