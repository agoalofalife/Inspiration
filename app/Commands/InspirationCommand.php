<?php
namespace Inspiration\Commands;

use Illuminate\Console\Command;

class InspirationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'inspiration:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Basic settings when you install the app';


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
        $this->info('The application Inspiration begins the installation...');
        $this->call('migrate');
        $this->info('All migrations were applied successfully!');

    }
}