<?php

use Illuminate\Database\Seeder;

class UpdateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('updates')->insert([
            'user' => 'ngodingers_community',
            'update_info' => 'Penambahan fitur melihat detail artikel, tanggal dibuat dan nama penulis',
            'user-color' => 'D64B3D',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('updates')->insert([
            'user' => 'ngodingers_team-1',
            'update_info' => 'Pembaharuan situs Ngodingers, mengoptimalkan performa dan kenyamanan penggunaan',
            'user-color' => '3D92D6',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('updates')->insert([
            'user' => 'ngodingers_team-3',
            'update_info' => 'Maintenance dan persiapan pembaharuan situs',
            'user-color' => '9D3DD6',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
