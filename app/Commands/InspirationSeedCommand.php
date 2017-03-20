<?php

namespace Inspiration\Commands;

use Illuminate\Console\Command;


class InspirationSeedCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'inspiration:seed {--class=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To fill table the application Inspiration';
    protected $namespace   = 'Inspiration\Seeds';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->hasOption('class'))
        {
           if ( class_exists($seeder = $this->namespace . '\\' . $this->option('class')))
           {
               (new $seeder)->run();
           }
        }
    }

}
