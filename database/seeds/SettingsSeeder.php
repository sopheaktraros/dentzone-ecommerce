<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            'app_name' => 'Wemall',
            'logo' => 'images/logo/logos.png',
            'logo_fixed' => 'images/logo/logos.png',
            'address' => 'Beoung Kork 2, Toul Kork, Phnom Penh',
            'email' => 'customerservice@wemall.shop',
            'phone' => '(855) 011 326 231 / 015 227 782',
            'website' => 'www.wemall.shop',
            'footer_description_en' => '',
            'footer_description_kh' => '',
            'facebook_link' => 'www.facebook.com/wemallshop',
            'instagram_link' => '',
            'twitter_link' => '',
        ];

        foreach ($settings as $name => $value) {
            DB::table('settings')->insert([
                'setting_name_en' => $name,
                'setting_value_en' => $value
            ]);
        }
    }
}
