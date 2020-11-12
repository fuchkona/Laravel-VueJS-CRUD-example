<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

/**
 * Class ClearFuckingCache
 *
 * @package App\Console\Commands
 */
class ClearFuckingCache extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cfc';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear f*cking cache';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $this->call('cache:clear');
        $this->call('config:clear');
        $this->call('route:clear');
        $this->call('view:clear');

        return true;
    }
}
