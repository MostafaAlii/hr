<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\{Schema, DB};
class EmployeeSeeder extends Seeder {
   public function run() {
        Schema::disableForeignKeyConstraints();
        DB::table('employees')->truncate();
        Employee::factory()->create([
            'name' => 'Mostafa Ali',
            'email' => 'employee@app.com',
            'password' => bcrypt('123123'),
            'status' => 1,
        ]);
        Employee::factory()->count(10)->create();
        Schema::enableForeignKeyConstraints();
    }
}