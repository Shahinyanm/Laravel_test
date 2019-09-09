<?php

use Illuminate\Database\Seeder;

class CompanyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'type'  =>  'Public Limited Company',
                'slug'  =>  'public'

            ],

            [
                'type'  =>  'Private Limited Company',
                'slug'  =>  'private'

            ],

            [
                'type'  =>  'One Person Company',
                'slug'  =>  'one_person'

            ],
        ];

        foreach($types as $type){
            \App\CompanyType::create($type);
        }
    }
}
