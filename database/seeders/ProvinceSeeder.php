<?php /** @noinspection Typo */

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = Country::all();
        foreach ($countries as $country) {
            if ($country->name === 'South Africa') {
                $this->createSouthAfricanProvinces($country);
            } elseif ($country->name === 'France') {
                $this->createFrenchProvinces($country);
            } elseif ($country->name === 'Zimbabwe') {
                $this->createZimbabweanProvinces($country);
            }
        }
    }

    /**
     * @param Country $country
     * @return void
     */
    public function createSouthAfricanProvinces(Country $country): void
    {
        $provinces = [
            'Eastern Cape',
            'Free State',
            'Gauteng',
            'KwaZulu-Natal',
            'Limpopo',
            'Mpumalanga',
            'Northern Cape',
            'North West',
            'Western Cape'
        ];
        foreach ($provinces as $province) {
            \App\Models\Province::create([
                'name' => $province,
                'country_id' => $country->id
            ]);
        }
    }

    /**
     * @param Country $country
     * @return void
     */
    public function createFrenchProvinces(Country $country): void
    {
        $provinces = [
            'Auvergne-Rhône-Alpes',
            'Bourgogne-Franche-Comté',
            'Bretagne',
            'Centre-Val de Loire',
            'Corse',
            'Grand Est',
            'Hauts-de-France',
            'Île-de-France',
            'Normandie',
            'Nouvelle-Aquitaine',
            'Occitanie',
            'Pays de la Loire',
            'Provence-Alpes-Côte d\'Azur'
        ];
        foreach ($provinces as $province) {
            \App\Models\Province::create([
                'name' => $province,
                'country_id' => $country->id
            ]);
        }
    }

    /**
     * @param Country $country
     * @return void
     */
    public function createZimbabweanProvinces(Country $country): void
    {
        $provinces = [
            'Bulawayo',
            'Harare',
            'Manicaland',
            'Mashonaland Central',
            'Mashonaland East',
            'Mashonaland West',
            'Masvingo',
            'Matabeleland North',
            'Matabeleland South',
            'Midlands'
        ];
        foreach ($provinces as $province) {
            \App\Models\Province::create([
                'name' => $province,
                'country_id' => $country->id
            ]);
        }
    }
}
