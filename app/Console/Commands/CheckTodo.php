<?php

namespace App\Console\Commands;

use App\Jobs\AssignTodoToDeveloper;
use App\Services\Integration\Todo\DeliveryIntegration;
use App\Services\Integration\IntegrationManagerInterface;
use Illuminate\Console\Command;

class CheckTodo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'todo:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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

        $integrationManager = resolve(IntegrationManagerInterface::class);

        $todoIntegrations = config('todos.integrations');

        foreach ($todoIntegrations as $integration) {
            $integrationAdapter = "\App\Services\Integration\Todo\Adapters\\" . $integration['adapter_name'];

            $integration = $integrationManager->loadIntegration(new DeliveryIntegration(new $integrationAdapter()));

            $integration->checkTodoList();
        }

        AssignTodoToDeveloper::dispatch();

        return 0;
    }
}
