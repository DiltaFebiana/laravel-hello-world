<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){  
        DB::table('homes')->insert([
            'name' => 'PASTA CAPELLINI',
            'slug' => 'item',
            'image' => 'image1',
            'content' => 'Ini adalah jenis pasta Italia yang sangat tipis, dengan diameter antara 0,85 dan 0,92 milimeter. Seperti spageti, berbentuk batang, dalam bentuk untaian panjang. Seringkali dijual dalam bentuk seperti sarang. Capelli telah populer di Italia sejak setidaknya abad ke-14',
            'price' => 50.000,
            'draft' => 0
        ]);

        DB::table('homes')->insert([
            'name' => 'PASTA PILLUS',
            'slug' => 'item2',
            'image' => 'image2',
            'content' => 'Pillus adalah sejenis pasta dijumpai di Sardinia, terutamanya di sekitar Oristano.Pasta seperti mi, dibuat dalam jalur reben nipis. Keistimewaan pasta ini ialah ia diuli lama.Ia dimasak dalam kuah daging lembu (atau kadang kala domba) dan dihidangkan bersama keju pecorino.',
            'price' => 100.000,
            'draft' => 0
        ]);

        DB::table('homes')->insert([
            'name' => 'PASTA FUSILLI',
            'slug' => 'item3',
            'image' => 'image3',
            'content' => 'Fusili merupakan salah satu pasta yang bentuknya spiral. Fusili biasanya diolah dengan saus krim dan kacang polong.',
            'price' => 70.000,
            'draft' => 0

        ]);

    }

}
