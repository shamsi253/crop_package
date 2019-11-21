<?php

use Illuminate\Database\Seeder;

class ImageDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crop_size')->insert([
            [
                'type' => 'About Us',
                'name' => 'about_us',
                'width' => 'test width',
            ],
            [
                'type' => 'Privacy Policy',
                'name' => 'privacy_policy',
                'width' => 'test width'
            ],
            [
                'type' => 'Terms and Conditions',
                'name' => 'terms_and_conditions',
                'width' => 'test content'
            ]
        ]);
    }
}
