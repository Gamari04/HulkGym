<?php

namespace App\Http\Controllers\Coach;

use App\Http\Controllers\Controller;
use App\Models\Exercice;
use App\Http\Requests\StoreExerciceRequest;
use App\Http\Requests\UpdateExerciceRequest;
use App\Models\TrainingProgram;

class ExerciceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exercices = Exercice::all();
        $programs= TrainingProgram::all();
        return view('Home.exercices', compact('programs','exercices'));
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
    public function store(StoreExerciceRequest $request)
    {
        
        Exercice::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $exercise = Exercice::findOrFail($id);
    return view('exercises.show', compact('exercise'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exercice $exercice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExerciceRequest $request, Exercice $exercice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exercice $exercice)
    {
        //
    }
}
