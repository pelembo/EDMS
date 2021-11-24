<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();
        $states = [
                ['title' => "Abia"],
                ['title' => "Adamawa"],
                ['title' => "Akwa Ibom"],
                ['title' => "Anambra"],
                ['title' => "Bauchi"],
                ['title' => "Bayelsa"],
                ['title' => "Benue"],
                ['title' => "Borno"],
                ['title' => "Cross River"],
               [ 'title' => "Delta"],
                ['title' => "Ebonyi"],
                ['title' => "Edo"],
                ['title' => "Ekiti"],
                ['title' => "Enugu"],
                ['title' => "FCT - Abuja"],
                ['title' => "Gombe"],
                ['title' => "Imo"],
                ['title' => "Jigawa"],
                ['title' => "Kaduna"],
                ['title' => "Kano"],
                ['title' => "Katsina"],
                ['title' => "Kebbi"],
                ['title' => "Kogi"],
                ['title' => "Kwara"],
                ['title' => "Lagos"],
                ['title' => "Nasarawa"],
                ['title' => "Niger"],
                ['title' => "Ogun"],
                ['title' => "Ondo"],
                ['title' => "Osun"],
                ['title' => "Oyo"],
                ['title' => "Plateau"],
                ['title' => "Rivers"],
                ['title' => "Sokoto"],
                ['title' => "Taraba"],
                ['title' => "Yobe"],
                ['title' => "Zamfara"]

        ];

        DB::table('states')->insert($states);

    }
}
