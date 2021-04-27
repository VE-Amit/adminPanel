<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index(){
        $subs = Subscription::all();
        return view('admin.subs.index', compact('subs'));
    }
    public function create(){
        return view('admin.subs.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $sub = new Subscription();
        $sub->name = $request->name;
        $sub->description = $request->description;
        $sub->cost = $request->cost;
        $sub->save();
        return redirect()->route('admin.subs.index');
    }
    public function edit($id){
        $sub = Subscription::findOrFail($id);
        return view('admin.subs.edit', compact('sub'));
    }
    public function update($id, Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $sub = Subscription::findOrFail($id);
        $sub->name = $request->name;
        $sub->description = $request->description;
        $sub->cost = $request->cost;
        $sub->save();
        return redirect()->route('admin.subs.index');
    }
    public function delete($id){
        $sub = Subscription::findOrFail($id);
        $sub->delete();
        return redirect()->route('admin.subs.index');
    }
}