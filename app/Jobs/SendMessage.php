<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Exception;
class SendMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 3;
    protected $message;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->message = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        info($this->message);
    }

    /**
     * The job failed to process
     *
     * @param Exception $exception
     */

    public function failed(Exception $exception)
    {

    }
}
