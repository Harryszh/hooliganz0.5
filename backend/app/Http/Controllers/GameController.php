<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class GameController extends Controller
{
    /**
     * Simple ping endpoint.
     */
    public function ping(): JsonResponse
    {
        return response()->json(['ping' => 'pong']);
    }
}
