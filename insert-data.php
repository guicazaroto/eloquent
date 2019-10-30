<?php
require "bootstrap.php";
$user = User::Create(['name' => "Guilherme Cazaroto",    'email' => "gui.cazaroto@lbs.com",    'password' => password_hash("guicaza",PASSWORD_BCRYPT), ]);
print_r($user->todo()->create([
   'todo' => "Descovery Eloquent functions",
   'category' => "eloquent",
   'description' => "Descovery how to do queries"
   ]));
