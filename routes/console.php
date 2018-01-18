<?php

use App\Cat;
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
})->describe('Set up some cat breeds in the database.');

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
})->describe('Set up some cat toys in the database.');

Artisan::command('cats:associate-toys', function () {
    $this->info(console_line());
    $this->info('Associating some Favorite Toys with some Breeds.');
    $this->info(console_line());

    Breed::all()->each(function ($breed) {
        $toys = Toy::all()
            ->random(rand(2, 4));

        $breed->toys()->sync(
            $toys->pluck('id')
        );

        $this->info(
            'Associated ' .
            $toys->implode('name', ', ') .
            " with {$breed->name}."
        );
    });
})->describe('Associate some Favorite Toys with some Breeds.');

Artisan::command('cats:seed-cats', function () {
    $this->info(console_line());
    $this->info('Seeding 6 Cats in the database.');
    $this->info(console_line());

    factory(Cat::class, 6)->create();

    Cat::all()->each(function ($cat) {
        $this->info('Created ' . $cat->name);
    });
})->describe('Seed 6 cats in the database.');

Artisan::command('cats:fresh', function () {
    if ($this->confirm('Reset Database and seed Default Cat Friends Data?')) {
        $this->info('Kiss your database Goodbye!');
        $this->info(console_line());

        $this->call('migrate:fresh');
        $this->call('cats:seed-breeds');
        $this->call('cats:seed-toys');
        $this->call('cats:associate-toys');
        $this->call('cats:seed-cats');
    }
})->describe('Reset all databases and seed some sane data for development.');
