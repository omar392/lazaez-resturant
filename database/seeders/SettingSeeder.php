<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'email'=>'email@email.com',
            'phone'=>'00966258369147',
            'whatsapp'=>'00966258369147',
            'tax'=>25,
            'service'=>50,
            'whatsapp'=>'00966258369147',
            'website_url'=>'https://www.apple.com/store',
            'apple_url'=>'https://www.apple.com/store',
            'android_url'=>'https://play.google.com/store',
            'twitter'=>'https://www.twitter.com',
            'snapchat'=>'https://www.snapchat.com',
            'instagram'=>'https://www.instagram.com',
            'address_ar'=>'المملكة العربية السعودية - الرياض - المنفوحة',
            'address_en'=>'KSA - AL-Riyadh - Al-Batha',
        ]);
    }
}
