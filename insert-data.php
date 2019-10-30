<?php
require "bootstrap.php";
try {
   $user = User::Create(
      [
         'name' => "Jonas da Baleia",    
         'email' => "jonas.cazaroto@lbs.com", 
         'password' => password_hash("jocaza",PASSWORD_BCRYPT)
      ]
   );
   $user->todo()->create([
      'todo' => "Make an API with Slim Framework",
      'category' => "slim",
      'description' => "Descovery how to do an API"
   ]);
} catch (Exception $err) {
   echo "Occorreu um erro";
}
