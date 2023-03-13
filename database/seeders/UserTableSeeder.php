<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // create admin user
    DB::table('users')->insert([
      'email' => 'admin@bigscreenvr.com',
      'password' => Hash::make('admin123'),
    ]);
  }
}
