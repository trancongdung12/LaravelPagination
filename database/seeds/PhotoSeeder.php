<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<30;$i++){
            DB::table('photos')->insert([
                'image'=> "public/photo.jpg"
            ]);

        }
    }
}
