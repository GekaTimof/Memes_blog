<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AutoPublishPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:auto-publish-posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(){
        $posts = Post::where('is_published', false)->where('created_at', '<', now()->subDays(1))->get();
        foreach ($posts as $post) {
            $post->update(['is_published' => true]);
        }
    }

}
