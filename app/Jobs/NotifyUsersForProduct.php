<?php

namespace App\Jobs;

use App\Mail\ProductMail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class NotifyUsersForProduct implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    
    public $product;
    public function __construct(Product $product)
    {
        $this->product= $product;
        

    /**
     * Execute the job.
    */
}
    public function handle(): void
    {
        $users= User::all();
        $users->map(function (User $users){
Mail::to($users->email)->send(new ProductMail($this->product, $users));
        });
    }
}
