<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\CompanyType;
use App\Currency;
use App\Http\Requests\CompanyRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::with('user','currency','type')->paginate(50);

        return view('admin.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companyTypes= CompanyType::all();
        $currencies = Currency::all();
        $users = User::where('type','!=',User::ADMIN)->get();

        return view('admin.companies.create',compact('users','currencies','companyTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        Company::create($request->all());

        return redirect()->route('admin.companies.index')->with('success','Company has created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('admin.companies.show',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $companyTypes= CompanyType::all();
        $currencies = Currency::all();
        $users = User::where('type','!=',User::ADMIN)->get();
        return view('admin.companies.edit',compact('company','users','currencies','companyTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, Company $company)
    {

        $company->update($request->all());
        return redirect()->route('admin.companies.index')->with('success','Company has been updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('admin.companies.index')->with('success','Company has been deleted Successfully');

    }
}
