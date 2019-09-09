<?php

use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = ['USD', 'RUR', 'EUR', 'AMD', 'GBP'];

        foreach ($currencies as $currency) {
            \App\Currency::create([
                'currency' => $currency
            ]);
        }
    }
}
