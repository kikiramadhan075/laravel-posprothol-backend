<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    function index() {
        $discounts = \App\Models\Discount::all();

        return response()->json([
            'status' => 'Success',
            'data' => $discounts
        ], 200);
    }
}
