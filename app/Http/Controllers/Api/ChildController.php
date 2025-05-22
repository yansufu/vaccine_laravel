<?php
namespace App\Http\Controllers\Api;

use App\Models\Children;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ChildResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ChildController extends Controller
{
    public function index(){
        $child = Children::get();
        if($child->count() > 0)
        {
            return ChildResource::collection($child);
        }
        else
        {
            return response()->json(['message' => 'No Data'], 200);
        }
    }

    public function store(Request $request, $parent_id){
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'dateOfBirth' => 'required|date',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'medicalHistory' => 'required|string|max:500',
            'allergy' => 'required|string|max:500',
        ]);

        if($validator->fails()){
            return response()->json(
            ['message' => 'invalid data format'], 422);
        };

        $child = Children::create([
            'parent_id' => $parent_id,
            'name' => $request->name,
            'dateOfBirth' => $request->dateOfBirth,
            'weight' => $request->weight,
            'height' => $request->height,
            'medicalHistory' => $request->medicalHistory,
            'allergy' => $request->allergy,
        ]);

        return response()->json(
            ['message' => 'data created successfully',
            'Data' => new ChildResource($child)], 200
        );
    }

    public function show(Children $child){
        return new ChildResource($child);
    }

    public function update(Request $request, Children $child){
        $validator = Validator::make($request->all(),[
            'name' => 'string|max:255',
            'dateOfBirth' => 'date',
            'weight' => 'numeric',
            'height' => 'numeric',
            'medicalHistory' => 'string|max:500',
            'allergy' => 'string|max:500',
        ]);

        if($validator->fails()){
            return response()->json(
            ['message' => 'invalid data format'], 422);
        };

        $child->update($request->only([
            'name',
            'dateOfBirth',
            'weight',
            'height',
            'medicalHistory',
            'allergy'
        ]));    

        return response()->json(
            ['message' => 'data updated successfully',
            'Data' => new ChildResource($child)], 200
        );

    }

    public function destroy(Children $child){
        $child->delete();
        return response()->json(['message' => 'delete child'], 200);
    }

    public function getByParent($parent_id)
    {
        $children = Children::where('parent_id', $parent_id)->get();

        if ($children->isEmpty()) {
            return response()->json(['message' => 'No children found for this parent'], 200);
        }

        return response()->json([
            'message' => 'Children fetched successfully',
            'data' => ChildResource::collection($children)
        ], 200);
    }

}
