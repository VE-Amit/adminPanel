<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $companies = Company::all();
        return view('admin.company.index', compact('companies'));
    }
    public function edit($id){
        $company = Company::findOrFail($id);
        $categories = Category::all();
        return view('admin.company.edit', compact('company', 'categories'));
    }
    public function update($id, Request $request){
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
        ]);
        $company = Company::findOrFail($id);
        $company->name = $request->name;
        $company->category_id = $request->category_id;
        $company->address = $request->address;
        $company->city = $request->city;
        $company->vat_number = $request->vat_number;
        $company->save();
        return redirect()->route('admin.company.index');
    }
    public function delete($id){
        $company = Company::findOrFail($id);
        $company->delete();
        return redirect()->route('admin.company.index');
    }
}
