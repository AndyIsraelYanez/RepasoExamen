<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Loan;
use App\Models\Book;
use App\Models\Author;

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
        Author::factory(5)->create();
        Book::factory(5)->create();
        User::factory(5)->create();
        Loan::factory(5)->create();
    }
}
