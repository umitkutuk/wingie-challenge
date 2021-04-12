<?php

namespace App\Services\Integration\Todo;

use App\Services\Integration\Integration;

class DeliveryIntegration extends Integration implements DeliveryIntegrationInterface
{
    public function checkTodoList()
    {
        return $this->getAdapter()->checkTodoList();
    }
}
