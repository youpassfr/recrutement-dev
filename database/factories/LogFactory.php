<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Log;
use Faker\Generator as Faker;

$factory->define(Log::class, function (Faker $faker) {
    $types = ['cashin', 'cashout'];
    $formulas = [
        'walletA199', 'walletA200', 'walletA250', 'walletA299', 'walletA300',
        'code0050', 'code0100', 'code0150', 'code0200', 'code0300', 'code0400',
        'code0500', 'code0600', 'code0700', 'code0800', 'code0900', 'code1000',
        'code1500', 'code2000',
    ];
    $statuses = ['confirmed','cancelled', 'caller_not_allowed','duration_too_short','out_of_stock','insufficient_balance','no_confirmation'];
    $providers = ['provider_1', 'provider_2', 'provider_3'];

    return [
        'user_number' => $faker->numberBetween(600000000,799999999),
        'type' => $faker->randomElement($types),
        'formula' => $faker->randomElement($formulas),
        'debited' => $faker->randomElement([null, $faker->numberBetween(10, 100)]) * 10,
        'credited' => $faker->randomElement([null, $faker->numberBetween(10, 100)]) * 10,
        'called' => $faker->e164PhoneNumber,
        'uuid' => $faker->uuid,
        'status' => $faker->randomElement($statuses),
        'provider' => $faker->randomElement($providers),
    ];
});
