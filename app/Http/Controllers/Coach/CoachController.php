<?php

namespace App\Http\Controllers\Coach;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCoachRequest;
use App\Http\Requests\UpdateCoachRequest;
use App\Models\Coach;
use App\Models\Role;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreCoachRequest $request)
    {
        $data = $request->all();
        $data['request_status'] = 'pending'; // Ajoutez 'request_status' => 'pending' aux données

        Coach::create($data); // Passez les données modifiées à la méthode create()

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Coach $coach)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coach $coach)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCoachRequest $request, Coach $coach)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coach $coach)
    {
        //
    }
    public function showRequests()
    {
        $requests = Coach::where('request_status', 'pending')->get();

        return view('admin.users.coachRequest', compact('requests'));
    }
    public function AcceptCoach($id)
    {
        $coach = Coach::findOrFail($id);
        $user = $coach->user;
        $coachRole = Role::where('name', 'coach')->first();
        if ($coachRole) {

            $coach->update(['request_status' => 'accepted']);

            $user->update(['role_id' => $coachRole->id]);
        }

        return redirect()->back();
    }

    public function RejectCoach($id)
    {
        $user = Coach::findOrFail($id);

        $user->update(['request_status' => 'rejected']);
        return redirect()->back();
    }
    public function showCreatedPrograms($id)
    {
        $coach = Coach::findOrFail($id);
        $createdPrograms = $coach->training_programs()->get(); ;
        
        return view('coach.MyPrograms', compact('coach', 'createdPrograms'));
    } 
}
