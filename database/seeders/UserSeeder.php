<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_email = User::where('email', 'admin@app.com')->first();
        if(empty($admin_email)){
            $new_admin = new User;
            $new_admin->name = 'Admin App';
            $new_admin->badge_number = '60';
            $new_admin->company_position = 'admin';
            $new_admin->phone_number = '08012345678';
            $new_admin->email = 'admin@app.com';
            $new_admin->backup_email = 'adminbackup@app.com';
            $new_admin->password = bcrypt('12345678');
            $new_admin->is_admin = true;
            $new_admin->save();
        }

        $user_1 = User::where('email', 'user_1@app.com')->first();
        if(empty($admin_email)){
            $new_admin = new User;
            $new_admin->name = 'User 1';
            $new_admin->badge_number = '61';
            $new_admin->company_position = 'user';
            $new_admin->phone_number = '08012345678';
            $new_admin->email = 'user_1@app.com';
            $new_admin->backup_email = 'adminbackup@app.com';
            $new_admin->password = bcrypt('12345678');
            $new_admin->save();
        }

        $user_2 = User::where('email', 'user_2@app.com')->first();
        if(empty($admin_email)){
            $new_admin = new User;
            $new_admin->name = 'User 2';
            $new_admin->badge_number = '62';
            $new_admin->company_position = 'user';
            $new_admin->phone_number = '08012345678';
            $new_admin->email = 'user_2@app.com';
            $new_admin->backup_email = 'adminbackup@app.com';
            $new_admin->password = bcrypt('12345678');
            $new_admin->save();
        }
    }
}
