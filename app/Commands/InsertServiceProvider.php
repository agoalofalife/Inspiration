<?php

namespace Inspiration\Commands;

use Illuminate\Console\Command;

class InsertServiceProvider extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'inspiration:insert-provider {--class=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'inserts a service provider to a file';

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
        if ($this->hasOption('class'))
        {
            if ( class_exists( $this->option('class') ))
            {
                insertServiceProvider('TinkerServiceProvider', $this->option('class') . '::class');
            }
        }
    }


}
