<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Models
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::truncate();

        for ($i = 0; $i < 10; $i++) {
            // Istanzio il model
            $movie = new Movie();

            // Ne riempio le colonne
            $movie->title = fake()->name();
            $movie->director = fake()->name();
            $movie->release_date = fake()->dateTime();
            $movie->nationality = fake()->countryCode();
            $movie->genre = 'Fantasy';

            // Lo salvo in persistenza
            $movie->save();
        }
    }
}
