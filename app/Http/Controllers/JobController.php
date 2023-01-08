<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();
        return view('jobUser', compact('jobs'));
    }

    public function viewJob($id){
        $job = Job::find($id);
        return view('jobDetailUser', compact('job'));
    }

    public function showAddJob($id){
        return view('addJob', compact('id'));
    }

    public function addJob(Request $request, $id){
        // $request->validate([
        //     'title' => 'required|min:15|max:500',
        //     'location' => 'required|min:5',
        //     'type' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        //     'salary' => 'required|numeric|min:1000|max:10000000',
        //     'description' => 'required|numeric|min:1|max:10000',
        //     'requirement' => 'required'
        // ]);
        $newJob = new Job();
        $newJob->name = $request->input('name');
        $newJob->location = $request->input('location');
        $newJob->type_id = $request->input('type');
        $newJob->company_id = $id;
        $newJob->salary = $request->input('salary');
        $newJob->description = $request->input('description');
        $newJob->requirement = $request->input('requirement');
        $newJob->save();

        return redirect()->route('companyDetail', $id);
    }

    public function deleteJob($id){
        $job = Job::find($id)->delete();
        return redirect()->back();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
