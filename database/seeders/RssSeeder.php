<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rss;

class RssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rss::create([
            'name' => 'France 24',
            'url' => "https://www.france24.com/en/rss"
        ]);
        Rss::create([
            'name' => 'Zeit Online',
            'url' => "http://newsfeed.zeit.de/index"
        ]);
        Rss::create([
            'name' => 'Stuff.co.nz',
            'url' => "https://www.stuff.co.nz/rss"
        ]);
        Rss::create([
            'name' => 'Korea Times',
            'url' => "https://www.koreatimes.co.kr/www/rss/northkorea.xml"
        ]);

        
    }
}
