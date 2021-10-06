<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SubscriberApiController extends Controller
{
    protected $subscriberService;

    public function processMessage(Request $data)
    {
        if (count($data->all()) > 0) {
            Log::info($data->all());
            return response()->json([
                'message' => 'successful',
            ], 200);
        }

        return response()->json([
            'message' => 'Bad request',
        ], 400);
    }
}
