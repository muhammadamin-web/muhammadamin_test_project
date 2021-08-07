<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\FactoriesResource;
use App\Models\Factories;
use Illuminate\Http\Request;

class FactoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(FactoriesResource::collection(Factories::all()), 200);

    }

 
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->toArray(), [
            'name' => 'required',
            'slug' => 'required',
        ]);

        if ($validate->fails()) {
            return response($validate->errors(), 400);
        }
        return response(new FactoriesResource(Factories::create($validate->validate())), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Factories  $factories
     * @return \Illuminate\Http\Response
     */
    public function show(Factories $factory)
    {
        return response(new FactoriesResource($factory), 200);
    }

                                                                                            
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Factories  $factories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factories $factories)
    {
        $validate = Validator::make($request->toArray(), [
            'name' => 'required',
            'slug' => 'required',
        ]);

        if ($validate->fails()) {
            return response($validate->errors(), 400);
        }

      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Factories  $factories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factories $factories)
    {
        $factories->delete();

        return response(null, 204);
    
    }
}
