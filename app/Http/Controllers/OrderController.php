<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    public function newOrder(OrderRequest $request): Response
    {
        $data = $request->only([
            'name',
            'email',
            'text'
        ]);
        Order::create($data);

        return response(['status' => true], 200);
    }
}
