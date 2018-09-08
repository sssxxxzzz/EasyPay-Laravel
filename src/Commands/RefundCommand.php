<?php

namespace EasyPay\Laravel\Commands;

use Illuminate\Console\Command;

class RefundCommand extends BaseEasyPayCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'easypay:refund';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '订单退款';

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
        // TODO
    }
}