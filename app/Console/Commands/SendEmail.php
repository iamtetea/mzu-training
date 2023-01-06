<?php

namespace App\Console\Commands;

use App\Models\Contact;
use Illuminate\Console\Command;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sendEmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email at every on 6 AM';

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
     * @return int
     */
    public function handle()
    {
        try {
            info('Executing command');
            $contact = Contact::find(6);
            info($contact);
        } catch (\Throwable $th) {
            info($th->getMessage());
            throw $th;
        }
    }
}
