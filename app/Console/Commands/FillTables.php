<?php

namespace App\Console\Commands;

use App;

use Illuminate\Console\Command;

class FillTables extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:populate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fills the tables';

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
      factory(App\User::class, 5)->create();
      factory(App\Group::class, 5)->create();
      factory(App\Trip::class, 5)->create();
    }
}
