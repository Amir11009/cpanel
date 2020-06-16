<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Color;
use App\Group_main;
use App\Group_sub1;
use App\Group_sub2;
use App\Product;
use App\Size;
use Illuminate\Foundation\Auth\User;

$factory->define(User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Product::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->numberBetween($min=1,$max=3),
        'group_main_id' => $faker->numberBetween($min=1,$max=4),
        'group_sub1_id' => $faker->numberBetween($min=1,$max=5),
        'group_sub2_id' => $faker->numberBetween($min=1,$max=6),
        'name' => $faker->text($maxNbChars=10),
        'description' => $faker->text($maxNbChars=50),
        'price' => $faker->numberBetween($min=20000,$max=30000),
        'off' => $faker->numberBetween($min=0,$max=15),
        'rate' => $faker->numberBetween($min=1,$max=5),
        'image1' => $faker->imageUrl($width=272,$height=250,'sports'),
        'image2' => $faker->imageUrl($width=272,$height=250,'sports'),
        'image3' => $faker->imageUrl($width=272,$height=250,'sports'),
        'image4' => $faker->imageUrl($width=272,$height=250,'sports'),
    ];
});

$factory->define(Group_main::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->text($maxNbChars=10),
    ];
});

$factory->define(Group_sub1::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->text($maxNbChars=10),
        'main_id' => $faker->numberBetween($min=1,$max=5),
        'image' => $faker->imageUrl($width=50,$height=50,'sports'),
    ];
});

$factory->define(Group_sub2::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->text($maxNbChars=15),
        'sub1_id' => $faker->numberBetween($min=1,$max=5),
        'image' => $faker->imageUrl($width=50,$height=50,'sports'),
    ];
});

$factory->define(Color::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->colorName,
    ];
});

$factory->define(Size::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->numberBetween($min=128,$max=230),
    ];
});
