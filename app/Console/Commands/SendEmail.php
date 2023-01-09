<?php

namespace App\Console\Commands;

use App\Models\Contact;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Subscription;
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
            // info('Executing command');
            // $contact = Contact::find(6);
            // info($contact);

            // Product::create([
            //     'name' => 'Product Name',
            //     'price' => 500
            // ]);

            // Subscription::create([
            //     'name' => 'Subss',
            //     'price' => 250
            // ]);

            // $data = new Product();
            // $data->name = 'Test Name';
            // $data->price = 500;
            // $data->save();

            // $data = new Payment();
            // $data->amount_paid = 500;
            // $data->payable_id = 1;
            // $data->payable_type = Product::class; // App\Models\Product
            // $data->save();

            // $data = new Payment();
            // $data->amount_paid = 250;
            // $data->payable_id = 1;
            // $data->payable_type = Subscription::class; // App\Models\Subscription
            // $data->save();

            $data = Payment::find(1);
            // $data->with('payable');
            info($data);
            info($data->payable);
        } catch (\Throwable $th) {
            info($th->getMessage());
            throw $th;
        }
    }
}
