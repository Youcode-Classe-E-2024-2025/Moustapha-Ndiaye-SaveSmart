<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Family;
use App\Models\User;


class FamilyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // get the id of the family
        $family = Family::where('email', 'familyNdiaye@gmail.com')->first();

        if ($family){
            User::create([
                'firstname' => 'Amdy', 
                'family_id' => $family->id
            ]);
            User::create([
                'firstname' => 'Aminata', 
                'family_id' => $family->id
            ]);
            User::create([
                'firstname' => 'Astou', 
                'family_id' => $family->id
            ]);
            User::create([
                'firstname' => 'Amadou', 
                'family_id' => $family->id
            ]);
            User::create([
                'firstname' => 'Aziz', 
                'family_id' => $family->id
            ]);
        }else {
            echo 'Family not found' ;
        }
    }
}
