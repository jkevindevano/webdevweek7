<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use App\Http\Requests\StoreLecturerRequest; 
use App\Http\Requests\UpdateLecturerRequest;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lecturer = Lecturer::all();
        return view('lecturer', [
            'lecturers' => $lecturer,
        ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lecturer-form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Lecturer::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "faculty"=>$request->faculty,
            "isActive"=>$request->isActive
        ]);
        return redirect("/lecturer");
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecturer $lecturer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lecturer $lecturer)
    {
        return view('editlecturer', compact('lecturer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLecturerRequest $request, Lecturer $lecturer)
    {
        $lecturer->update([
            'name' => $request->name,
            'email' => $request->email,
            'faculty' => $request->faculty,
            'isActive' => $request->has('isActive') ? 1 : 0,
        ]);

        return redirect("/lecturer");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecturer $lecturer)
    {
         $lecturer->delete();

        return redirect("/lecturer");
    }

    public function getAllLecturers(){
        $lecturers = Lecturer::all();
        return view('/lecturer', compact('lecturers'));
    }
}
