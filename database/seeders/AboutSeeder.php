<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'about_ar'=>'من نحن',
            'about_en'=>'about us ',
            'polices_ar'=>'السياسات السياسات السياسات ',
            'polices_en'=>'Polices Polices Polices',
            'terms_ar'=>'الشروط و الاحكام  الشروط و الاحكام ',
            'terms_en'=>'Terms and conditions Terms and conditions ',
        ]);
    }
}
