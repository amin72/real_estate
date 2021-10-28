<?php

namespace Backpack\CRUD\app\Console\Commands;

use Illuminate\Console\Command;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backpack:user
                            {--N|name= : The name of the new user}
                            {--E|phone= : The user\'s phone number}
                            {--P|password= : User\'s password}
                            {--encrypt=true : Encrypt user\'s password if it\'s plain text ( true by default )}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Creating a new user');

        if (! $name = $this->option('name')) {
            $name = $this->ask('Name');
        }

        if (! $phone = $this->option('phone')) {
            $phone = $this->ask('Phone');
        }

        if (! $password = $this->option('password')) {
            $password = $this->secret('Password');
        }

        if ($this->option('encrypt')) {
            $password = bcrypt($password);
        }

        $auth = config('backpack.base.user_model_fqn', 'App\User');
        $user = new $auth();
        $user->name = $name;
        $user->phone = $phone;
        $user->password = $password;
        $user->is_admin = true;

        if ($user->save()) {
            $this->info('Successfully created new user');
        } else {
            $this->error('Something went wrong trying to save your user');
        }
    }
}
