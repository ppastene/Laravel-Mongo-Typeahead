<?php

use Illuminate\Database\Seeder;
use App\Song;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('songs')->delete();

        $json = File::get('database/data/songList.json');
        $data = json_decode($json);
        foreach ($data as $obj)
        {
            DB::collection('songs')->insert(['title' => $obj->title]);
        }
    }
}
