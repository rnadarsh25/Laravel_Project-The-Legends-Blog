<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user= App\User::create([
                'name' =>'adarsh',
                'email' => 'adarsh@gmail.com',
                'password' => bcrypt('147852'),
                'isAdmin' => 1,
            ]);

            App\Profile::create([

            'user_id' =>$user->id, 
            'avatar' => 'uploads/avatar.jpg',
            'about' => 'This is Ast',
            'facebook' =>'facebook.com'

        ]); 
                
    }
        
    
}
