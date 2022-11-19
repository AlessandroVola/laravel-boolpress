<?php

use Illuminate\Database\Seeder;
use App\Tag;


class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tags = ['Acid','Blues','Jazz','Ambient','Rock','Metal','Punk','Roma','Milano'];

        foreach($tags as $model){
            $tag = new Tag();
            $tag->name = $model;
            $tag->slug = Str::slug($tag->name);
            $tag->save();

        }
    }
}
