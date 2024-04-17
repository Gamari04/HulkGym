<?php

namespace App\Http\Controllers\Coach;

use App\Http\Controllers\Controller;
use App\Models\TrainingProgram;
use App\Http\Requests\StoreTrainingProgramRequest;
use App\Http\Requests\UpdateTrainingProgramRequest;
use App\Models\Category;

class TrainingProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = TrainingProgram::with('category')->where('status', 'accepted');
        $categories=Category::all();
        return view('coach.addProgram', compact('programs','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTrainingProgramRequest $request)
    {
        $programs = TrainingProgram::create($request->all());
        $categories = Category::all();
        $programs->addMediaFromRequest('image')->toMediaCollection('images');
        $programs->update(['status' => 'pending']);
        return view('coach.addProgram', compact('categories'));
    }

    /**
     * Display the specified resource.
     */
    public function show(TrainingProgram $trainingProgram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TrainingProgram $trainingProgram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrainingProgramRequest $request, TrainingProgram $trainingProgram)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TrainingProgram $trainingProgram)
    {
        //
    }
}
