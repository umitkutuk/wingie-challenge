<?php

namespace App\Services\Integration\Todo\Adapters;

use App\Models\Todo;
use App\Services\Integration\IntegrationAdapter;
use App\Services\Integration\Todo\DeliveryIntegrationAdapterInterface;
use Illuminate\Support\Facades\Http;

class Mocky1 extends IntegrationAdapter implements DeliveryIntegrationAdapterInterface
{
    public function checkTodoList()
    {
        $info = config('todos.' . env('MOCKY1_NAME') );

        $todos = Http::get($info['adapter_url'])
            ->json();

        foreach ($todos as $todo)
        {
            Todo::query()->firstOrCreate([
                'name' => $todo['id'],
                'level' => 1,
                'estimated_duration' => $todo['sure'] * $todo['zorluk']
            ]);
        }

    }
}
