<?php

namespace App\Http\Controllers;

use App\Http\Resources\DeveloperResource;
use App\Models\Developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function index()
    {
        $developers = Developer::query()
            ->with(['todos'])
            ->get();

        return DeveloperResource::collection($developers);
    }
}
