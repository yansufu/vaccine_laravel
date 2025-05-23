<?php

namespace App\Http\Controllers\Api;

use App\Models\Vaccines;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\VaccineResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class VaccineController extends Controller
{
    public function index(){
        $vaccine = Vaccines::get();
        if($vaccine->count() > 0)
        {
            return VaccineResource::collection($vaccine);
        }
        else
        {
            return response()->json(['message' => 'No Data'], 200);
        }
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'period' => 'required|integer|max:10'
        ]);

        if($validator->fails()){
            return response()->json(
            ['message' => 'invalid data format'], 422);
        };

        $vaccine = Vaccines::create([
            'name' => $request->name,
            'period' => $request->period
        ]);

        return response()->json(
            ['message' => 'data created successfully',
            'Data' => new VaccineResource($vaccine)], 200
        );
    }

    public function show(Vaccines $vaccine){
        return new VaccineResource($vaccine);
    }

    public function destroy(Vaccines $vaccine){
        $vaccine->delete();
        return response()->json(['message' => 'delete vaccine'], 200);
    }
}
