<?php

namespace App\Services\Integration\Todo\Adapters;

use App\Models\Todo;
use App\Services\Integration\IntegrationAdapter;
use App\Services\Integration\Todo\DeliveryIntegrationAdapterInterface;
use Illuminate\Support\Facades\Http;

class Mocky2 extends IntegrationAdapter implements DeliveryIntegrationAdapterInterface
{
    public function checkTodoList()
    {
        $info = config('todos.' . env('MOCKY2_NAME') );

        $todos = Http::get($info['adapter_url'])
            ->json();

        foreach ($todos as $todo)
        {
            $key = key($todo);

            Todo::query()->firstOrCreate([
                'name' => $key,
                'level' => 1,
                'estimated_duration' => $todo[$key]['estimated_duration'] * $todo[$key]['level']
            ]);
        }
    }
}
