<?php

namespace App\Http\Controllers\Coach;

use App\Http\Controllers\Controller;
use App\Models\TrainingProgram;
use App\Http\Requests\StoreTrainingProgramRequest;
use App\Http\Requests\UpdateTrainingProgramRequest;
use App\Models\Category;
use App\Models\Coach;
use Illuminate\Http\Request;

class TrainingProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = TrainingProgram::with('category')->get();
        $categories=Category::all();
        return view('Home.trainingPrograms', compact('programs','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('coach.addProgram',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTrainingProgramRequest $request)
    { 
        $description = strip_tags($request->input('description'));
        $programs = TrainingProgram::create([
        'title' => $request->input('title'),
        'category_id' => $request->input('category_id'),
        'coach_id' => $request->input('coach_id'), 
        'description' => $description,
        ]);
      
        $programs->addMediaFromRequest('image')->toMediaCollection('images');
        $programs->update(['status' => 'pending']);
        return redirect()->route('MyPrograms',auth()->user()->id);
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
   
    public function showExercises($id)
{
    $trainingProgram = TrainingProgram::findOrFail($id);
    $exercises = $trainingProgram->exercices()->get();

    return view('Home.exercices', compact('trainingProgram','exercises'));
}
public function follow(Request $request, $trainingProgramId)
{
    $trainingProgram = TrainingProgram::findOrFail($trainingProgramId);

    if (auth()->check()) {
        $userId = auth()->id();

        $trainingProgram->users()->attach($userId);

        return redirect()->back();
    } else {
        return redirect()->route('login');
    }
}
}
