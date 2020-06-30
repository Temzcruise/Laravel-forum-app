<?php

use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Channel::create([
            'title' => 'Laravel'
        ]);

        App\Channel::create([
            'title' => 'VueJs'
        ]);
        App\Channel::create([
            'title' => 'CSS3'
        ]);
        App\Channel::create([
            'title' => 'JavaScript'
        ]);
        App\Channel::create([
            'title' => 'PHP'
        ]);
        App\Channel::create([
            'title' => 'Spark'
        ]);
        App\Channel::create([
            'title' => 'Lumen'
        ]);
        App\Channel::create([
            'title' => 'Forge'
        ]);
    }
}
