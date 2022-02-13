<?php

namespace App\Http\Controllers;

use App\Models\Trainee;
use Illuminate\Http\Request;
use DB;

class TraineeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getTrainee = Trainee::get();
        return view('trainee.index', compact('getTrainee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required|unique:trainees',
        ]);

        $data = new Trainee();
        $data->full_name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->save();

        return redirect()->back()->with('success','Thank you');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trainee  $trainee
     * @return \Illuminate\Http\Response
     */
    public function show(Trainee $trainee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trainee  $trainee
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainee $trainee)
    {
        return view('trainee.edit_modal', compact('trainee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trainee  $trainee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainee $trainee)
    {
        $trainee->full_name = $request->name;
        $trainee->email = $request->email;
        $trainee->address = $request->address;
        $trainee->update();

        return redirect()->back()->with('success','Sayop');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trainee  $trainee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainee $trainee)
    {

    }

    public function destroytrainee($trainee_id)
    {
        Trainee::where('id',$trainee_id)
        ->delete();

        return redirect()->back()->with('success','Thank you');
    }
}
