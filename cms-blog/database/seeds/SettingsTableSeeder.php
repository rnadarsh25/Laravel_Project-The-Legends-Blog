<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = new Setting;
        $setting->site_name = 'Lara Blog 2020';
        $setting->contact_number = "123-456-789";
        $setting->contact_email = 'ast@gmail.com';
        $setting->address = "LPU, Phagwara, Punjab";
        $setting->copyright_text = "Copyright by Ast.";
        
        $setting->save();
    }
}
