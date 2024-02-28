<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Models
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        Book::truncate();

        for ($i = 0; $i < 10; $i++) {
            // Istanzio il model
            $book = new Book();

            // Ne riempio le colonne
            $book->title = fake()->name();
            $book->author = fake()->name();
            $book->release_date = fake()->dateTime();
            $book->nationality = fake()->countryCode();
            $book->genre = 'Fantasy';
            $book->pages = fake()->randomNumber(5, false);

            // Lo salvo in persistenza
            $book->save();
        }
    }
}
