<?php

use App\Cat\Toy;
use App\Cat\Breed;
use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('cats:seed-breeds', function () {
    $breeds = collect([
        'Persian',
        'Maine Coon',
        'Abyssinian',
        'Siamese',
        'Sphynx',
        'Russian Blue',
        'Dog',
    ]);

    $this->info(console_line());
    $this->info('Seeding Cat Breeds');
    $this->info(console_line());

    $breeds->each(function ($breed) {
        Breed::create(['name' => $breed]);

        $this->info('Created ' . $breed);
    });
});

Artisan::command('cats:seed-toys', function () {
    $toys = collect([
        'Laser Pointer',
        'String',
        'Fuzzy Ball',
        'Crinkle Ball',
        'Catnip Pouch',
        'Rubber Goldfish',
        'Mouse Toy',
        'Actual Mouse',
        'Feather',
    ]);

    $this->info(console_line());
    $this->info('Seeding Cat Toys');
    $this->info(console_line());

    $toys->each(function ($toy) {
        Toy::create(['name' => $toy]);

        $this->info('Created ' . $toy);
    });
});

Artisan::command('cats:fresh', function () {
    if ($this->confirm('Reset Database and seed Default Cat Friends Data?')) {
        $this->info('Kiss your database Goodbye!');
        $this->info(console_line());

        $this->call('migrate:fresh');
        $this->call('cats:seed-breeds');
        $this->call('cats:seed-toys');
    }
});
