<?php
require './vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->dropIfExists('users');
Capsule::schema()->create('users', function ($table) {
  $table->increments('id');
  $table->string('name');
  $table->string('email')->unique();
  $table->timestamps();
});
