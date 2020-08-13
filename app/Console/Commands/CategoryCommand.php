<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use Faker;
use Hash;

class CategoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'category:create {numberOfCategory=1}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create category';

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
        $numberOfCategory = $this->argument('numberOfCategory');

        if($this->confirm('Are you sure create category')) {
            try {
                for($i=0; $i < $numberOfCategory; $i++) {
                    DB::table('categories')->insert([
                        'content' => 'aaa'
                    ]);
                }
                $this->info('Category create success');
            }catch(Exception $e) {
                $this->error('Error' . $e . ' when create category');
            }
        }
    }
}
