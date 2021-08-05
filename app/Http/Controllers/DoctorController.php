<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request){
        $doctors = $request->user()->get();
        var_dump($request);
        return view('doctors.index', [
            'doctors' => $doctors,
        ]);
    }

    public function create()
    {
        return view('doctors.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:255',
            'email'=>'required|max:255',
            'pass'=>'required|max:10'
        ]);
        Auth::user()
            ->create([
                'name'=>$request->name,
                'email'=>$request->email,
                'pass'=>$request->pass,
            ]);
        return redirect(route('doctors.index'));
    }
}

