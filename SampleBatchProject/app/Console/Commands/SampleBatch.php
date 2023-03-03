<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SampleBatch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sample-batch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'echo current time';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        echo (date('H:i:s '));
        echo "\n";
    }
}
