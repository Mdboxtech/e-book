<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categorie;
use App\Models\Faculty;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // \App\Models\File::factory(20)->create();

        // \App\Models\File::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        // $data = [

        //     ['categories'=>'pdf'],
        //     ['categories'=>'DOCX'],
        //     ['categories'=>'PPT'],
        //     ['categories'=>'LEATEST'],
        // ];


        // Categorie::insert($data);


        $data = [

            ['science'=>'computer science','art_and_education'=>'computer education','basic_medical_science'=>'anatomy','social_management_science'=>'business admin' ,'law'=>'law','agric'=>'agric','pharmacy'=>'pharmacy'],
            ['science'=>'mathematics','art_and_education'=>'mathematics education','basic_medical_science'=>'physiology','social_management_science'=>'political science' ,'law'=>'','agric'=>'','pharmacy'=>''],
            ['science'=>'statistics','art_and_education'=>'chemistry education','basic_medical_science'=>'pharmacology','social_management_science'=>'public admin' ,'law'=>'','agric'=>'','pharmacy'=>''],
            ['science'=>'botany','art_and_education'=>'physics education','basic_medical_science'=>'public health','social_management_science'=>'sociology' ,'law'=>'','agric'=>'','pharmacy'=>''],
            ['science'=>'zoology','art_and_education'=>'biology education','basic_medical_science'=>'','social_management_science'=>'economics' ,'law'=>'','agric'=>'','pharmacy'=>''],
            ['science'=>'microbiology','art_&_education'=>'english','basic_medical_science'=>'','social_management_science'=>'' ,'law'=>'','agric'=>'','pharmacy'=>''],
            ['science'=>'physics','art_and_education'=>'hausa','basic_medical_science'=>'','social_management_science'=>'' ,'law'=>'','agric'=>'','pharmacy'=>''],
            ['science'=>'chemistry','art_and_education'=>'islamic','basic_medical_science'=>'','social_management_science'=>'' ,'law'=>'','agric'=>'','pharmacy'=>''],
            ['science'=>'biochemistry','art_and_education'=>'arabic','basic_medical_science'=>'','social_management_science'=>'' ,'law'=>'','agric'=>'','pharmacy'=>''],
            ['science'=>'SLT','art_and_education'=>'LIS','basic_medical_science'=>'','social_management_science'=>'' ,'law'=>'','agric'=>'','pharmacy'=>''],



        ];


        Faculty::insert($data);

    }




}