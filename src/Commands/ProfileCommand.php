<?php namespace Larafire\Commands;

use Illuminate\Console\Command;

class ProfileCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'larafire:profile';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Profile configured URLs.';

    /**
     *
     */
    public function handle()
    {
        //

        //message
        $this->line('Automatic profiling has been triggered.');
    }
}
