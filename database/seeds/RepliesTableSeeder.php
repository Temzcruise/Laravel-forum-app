<?php

use App\Reply;
use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r1 = [
            'user_id' => 1,
            'discussion_id' => 1,
            'content' => 'Loppudun hnbdhnsj bh hx hbhdbcha nbcjhsbdu dh ucbsdc sdcb hdbc hdbcihabsc shcbashc hjvcd chabsch sacguavcs asgcba.'
        ];

        $r2 = [
            'user_id' => 1,
            'discussion_id' => 2,
            'content' => 'jiiuniucas Loppudun hnbdhnsj bh hx hbhdbcha nbcjhsbdu dh ucbsdc sdcb hdbc hdbcihabsc shcbashc hjvcd chabsch sacguavcs asgcba.'
        ];

        $r3 = [
            'user_id' => 2,
            'discussion_id' => 3,
            'content' => 'Sakan cni cLoppudun hnbdhnsj bh hx hbhdbcha nbcjhsbdu dh ucbsdc sdcb hdbc hdbcihabsc shcbashc hjvcd chabsch sacguavcs asgcba.'
        ];

        $r4 = [
            'user_id' => 2,
            'discussion_id' => 4,
            'content' => 'Uinca Loppudun hnbdhnsj bh hx hbhdbcha nbcjhsbdu dh ucbsdc sdcb hdbc hdbcihabsc shcbashc hjvcd chabsch sacguavcs asgcba.'
        ];

        Reply::create($r1);
        Reply::create($r2);
        Reply::create($r3);
        Reply::create($r4);
        
    }
}
