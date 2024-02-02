<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\Artist::factory(10)->create();
         \App\Models\OrganisationContent::factory(1)->create();
         \App\Models\Concert::factory(10)->create();
         \App\Models\Member::factory(10)->create();
         \App\Models\PrivacyContent::factory(1)->create();
         \App\Models\Project::factory(10)->create();
         \App\Models\User::factory(1)->create();
         \App\Models\GeneralContent::factory(1)->create();

        
    }
}
