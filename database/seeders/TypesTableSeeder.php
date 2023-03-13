<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // create the types table

    Type::insert([
      [
        'id' => 1,
        'type' => 'A'
      ],
      [
        'id' => 2,
        'type' => 'B'
      ],
      [
        'id' => 3,
        'type' => 'C'
      ],
    ]);
  }
}
