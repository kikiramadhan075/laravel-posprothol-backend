<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class TaxController extends Controller
{
    function index() {
        $taxes = \App\Models\Taxes::all();

        return response()->json([
            'status' => 'Success',
            'data' => $taxes
        ]);
    }
}
