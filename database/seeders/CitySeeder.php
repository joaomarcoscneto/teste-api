<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['name' => 'Rio Branco', 'state' => 'Acre'],
            ['name' => 'Maceió', 'state' => 'Alagoas'],
            ['name' => 'Macapá', 'state' => 'Amapá'],
            ['name' => 'Manaus', 'state' => 'Amazonas'],
            ['name' => 'Salvador', 'state' => 'Bahia'],
            ['name' => 'Fortaleza', 'state' => 'Ceará'],
            ['name' => 'Brasília', 'state' => 'Distrito Federal'],
            ['name' => 'Vitória', 'state' => 'Espírito Santo'],
            ['name' => 'Goiânia', 'state' => 'Goiás'],
            ['name' => 'São Luís', 'state' => 'Maranhão'],
            ['name' => 'Cuiabá', 'state' => 'Mato Grosso'],
            ['name' => 'Campo Grande', 'state' => 'Mato Grosso do Sul'],
            ['name' => 'Belo Horizonte', 'state' => 'Minas Gerais'],
            ['name' => 'Belém', 'state' => 'Pará'],
            ['name' => 'João Pessoa', 'state' => 'Paraíba'],
            ['name' => 'Curitiba', 'state' => 'Paraná'],
            ['name' => 'Recife', 'state' => 'Pernambuco'],
            ['name' => 'Teresina', 'state' => 'Piauí'],
            ['name' => 'Rio de Janeiro', 'state' => 'Rio de Janeiro'],
            ['name' => 'Natal', 'state' => 'Rio Grande do Norte'],
            ['name' => 'Porto Alegre', 'state' => 'Rio Grande do Sul'],
            ['name' => 'Porto Velho', 'state' => 'Rondônia'],
            ['name' => 'Boa Vista', 'state' => 'Roraima'],
            ['name' => 'Florianópolis', 'state' => 'Santa Catarina'],
            ['name' => 'São Paulo', 'state' => 'São Paulo'],
            ['name' => 'Aracaju', 'state' => 'Sergipe'],
            ['name' => 'Palmas', 'state' => 'Tocantins'],
        ];
        foreach($cities as $city) {
            City::create($city);
        }
    }
}
