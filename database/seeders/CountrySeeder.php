<?php

namespace Database\Seeders;

use Closure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $countries = [
            'South Africa',
            'France',
            'Zimbabwe'
        ];

        foreach ($countries as $country) {
            \App\Models\Country::create([
                'name' => $country,
                'code' => $this->getCountryClosure($country),
                'continent' => $this->getContinentClosure($country)
            ]);
        }
    }

    /**
     * @param string $country
     * @return string
     */
    public function getCountryClosure(string $country): string
    {
        if ($country === 'South Africa') {
            return 'ZA';
        } elseif ($country === 'France') {
            return 'FR';
        } elseif ($country === 'Zimbabwe') {
            return 'ZW';
        }
        return 'XX';
    }

    /**
     * @param string $country
     * @return string
     */
    public function getContinentClosure(string $country): string
    {
        if ($country === 'South Africa') {
            return 'Africa';
        } elseif ($country === 'France') {
            return 'Europe';
        } elseif ($country === 'Zimbabwe') {
            return 'Africa';
        }
        return 'Unknown';
    }
}
