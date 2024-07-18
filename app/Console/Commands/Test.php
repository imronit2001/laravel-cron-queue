<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = new \App\Models\User();
        $users->name = "Rahul";
        $users->email = "admin".time()."@triophase.com";
        $users->password = time();
        $users->save();
        $this->info("User Created");
    }
}
