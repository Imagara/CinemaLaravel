<?php

namespace App\Http\Controllers\API;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    public function TicketValidation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'number' => 'required|string',
            'price' => 'required|integer'
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors());
        }
        Ticket::create([
            'name' => $request->name,
            'number' => $request->number,
            'price' => $request->price
        ]);
    }
}
