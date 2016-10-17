<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Property;
use App\Tenancy;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('properties.index', ['properties' => Property::all(), 'tenancies' => Tenancy::all()]);
    }

    public function create()
    {
        return view('properties.create', ['tenancies' => Tenancy::all()]);
    }

    public function store(Requests\StorePropertyRequest $request)
    {
        $property = Property::create($request->except('image'));

        $request->file('image')->move(
            base_path() . '/public/images/properties',
            $property->id . '.' . $request->file('image')->getClientOriginalExtension()
        );

        return redirect(route('properties.index'))->with('message', 'Property was created');
    }
}
