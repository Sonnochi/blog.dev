<?php

class UserTableSeeder extends Seeder 
{
     public function run()
     {
        $user = new User();
        
        $user->email = 'joseefarmer@yahoo.com';
        $user->password = Hash::make('password123');
        
        $user->save();
     }
}
