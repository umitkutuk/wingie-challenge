<?php

namespace App\Jobs;

use App\Models\Developer;
use App\Models\Todo;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class AssignTodoToDeveloper implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Todo::query()
            ->whereNull('developer_id')
            ->chunk(100, function ($todos) {
                foreach ($todos as $todo)
                {
                    $developer = Developer::query()
                        ->orderBy('first_available_at')
                        ->first();
                }
            });
    }
}
