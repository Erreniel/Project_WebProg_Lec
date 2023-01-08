<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function viewCompany($id){
        $company = Company::find($id);
        return view('companyProfileUser', compact('company'));
    }

    public function getCompany(){
        if(Auth::user()->role == 'Admin'){
            $companies = Company::all();
            return view('homeUser', compact('companies'));
        }
        else{
            return view('homeUser');
        }
    }

    public function showAddCompany(){
        return view('addCompany');
    }

    public function addCompany(Request $request){
        // $request->validate([
        //     'name' => 'required|min:15|max:500',
        //     'desc' => 'required|min:5',
        //     'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        //     'location' => 'required|numeric|min:1000|max:10000000',
        //     'email' => 'required|numeric|min:1|max:10000',
        //     'website' => 'required',
        //     'employee' => '',
        //     'slogan' => ''
        // ]);
        $newCompany = new Company();
        $newCompany->name = $request->input('name');
        $newCompany->description = $request->input('desc');
        $path = $request->logo->move('asset', $request->logo->getClientOriginalName());
        $newCompany->logo = 'asset/'.$request->logo->getClientOriginalName();
        $newCompany->location = $request->input('location');
        $newCompany->email = $request->input('email');
        $newCompany->website = $request->input('website');
        $newCompany->employee = $request->input('employee');
        $newCompany->slogan = $request->input('slogan');
        $newCompany->save();

        return redirect()->route('home');
    }

    public function deleteCompany($id){
        $company = Company::find($id)->delete();
        return redirect()->route('home');
    }

    public function showEditDescription($id){
        $job = Job::find($id);
        return view('descEdit', compact('job'));
    }

    public function editDescription(Request $request, $id){
        $job = Job::find($id);
        // $request->validate([
        //     'descriptionEdit' => ''
        // ])
        $updateData = [
            'description' => $request->input('descriptionEdit')
        ];

        $job->update($updateData);

        return redirect()->route('jobDetail', $job->id);
    }

    public function showEditRequirement($id){
        $job = Job::find($id);
        return view('reqEdit', compact('job'));
    }

    public function editRequirement(Request $request, $id){
        $job = Job::find($id);
        // $request->validate([
        //     'descriptionEdit' => ''
        // ])
        $updateData = [
            'requirement' => $request->input('requirementEdit')
        ];
        $job->update($updateData);

        return redirect()->route('jobDetail', $job->id);
    }
}
