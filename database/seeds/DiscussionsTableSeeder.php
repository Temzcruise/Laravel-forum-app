<?php

use App\Discussion;
use Illuminate\Database\Seeder;

class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = 'Implementing OAUTH2 with laravel passport';

        $t2 = 'Pagination in vueJS not working correctly';

        $t3 = 'Vuejs event listeners for child components';

        $t4 = 'Laravel homestead error - undetected database';

        $d1 = [
            'title' => $t1,

            'content' => 'Lorem ipsum cnunnsc nnd  dhivbsikd hnvdsk kjnbvkjsdb hibndicsnd hkbkascdabica bckabnscjas kjncsjncsaj ijnjsc s ssjjjbnc  scancsdc  csajnasijnc Yea baby.',
            
            'channel_id'=> 1,
            
            'user_id' => 2,
            
            'slug' => str_slug($t1)
        ];

        $d2 = [
            'title' => $t2,

            'content' => 'VueJs pagination Lorem ipsum cnunnsc nnd  dhivbsikd hnvdsk kjnbvkjsdb hibndicsnd hkbkascdabica bckabnscjas kjncsjncsaj ijnjsc s ssjjjbnc  scancsdc  csajnasijnc Yea baby.',
            
            'channel_id'=> 2,
            
            'user_id' => 1,
            
            'slug' => str_slug($t2)
        ];

        $d3 = [
            'title' => $t3,

            'content' => 'Big boys in the building Lorem ipsum cnunnsc nnd  dhivbsikd hnvdsk kjnbvkjsdb hibndicsnd hkbkascdabica bckabnscjas kjncsjncsaj ijnjsc s ssjjjbnc  scancsdc  csajnasijnc Yea baby.',
            
            'channel_id'=> 2,
            
            'user_id' => 1,
            
            'slug' => str_slug($t3)
        ];

        $d4 = [
            'title' => $t4,

            'content' => 'Yea you got that yummy yummy Lorem ipsum cnunnsc nnd  dhivbsikd hnvdsk kjnbvkjsdb hibndicsnd hkbkascdabica bckabnscjas kjncsjncsaj ijnjsc s ssjjjbnc  scancsdc  csajnasijnc Yea baby.',
            
            'channel_id'=> 5,
            
            'user_id' => 1,
            
            'slug' => str_slug($t4)
        ];

        Discussion::create($d1);

        Discussion::create($d2);

        Discussion::create($d3);

        Discussion::create($d4);
    }
}
