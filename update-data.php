<?php
require "bootstrap.php";

$flight = User::find(1);

$flight->name = 'Maradona na copa de 70';

$flight->save();
