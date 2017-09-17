<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class KateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kate:print';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $faker = \Faker\Factory::create();

        \App\Test::create([
            'name' => $faker->name
        ]);

        /*$header = ['name', 'email', 'created_at'];
        $users = User::all()->map(function($user){
            return [
                'name' => $user->name,
                'email' => $user->email,
                'cerated_at' => $user->created_at->diffForHumans()
            ];
        })->toArray();

        $this->table($header, $users);*/

        /*$name = $this->ask('What your name?');
        $password = $this->secret('What is the password?');

        if ($this->confirm('Print data?')) {
            $this->info("Hello $name your password is $password");
        }else{
            $this->error('Bye');
        }*/
    }
}
