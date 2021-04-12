<?php

namespace App\Jobs;

use App\Models\Developer;
use App\Models\Todo;
use Carbon\Carbon;
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
        $todos = Todo::query()
            ->whereNull('developer_id')
            ->get();

        foreach ($todos as $todo)
        {
            $developer = Developer::query()
                ->orderBy('total_assign_hour')
                ->first();

            $todo->update([
                'developer_id' => $developer->id
            ]);

            $developer->update([
                'total_assign_hour' => ($developer->total_assign_hour + ($todo->estimated_duration / $developer->level))
            ]);
        }
    }
}
