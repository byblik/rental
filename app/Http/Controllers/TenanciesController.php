<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Tenancy;
use App\Tenant;
use Illuminate\Http\Request;

class TenanciesController extends Controller
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
        return view('tenancies.index', ['tenancies' => Tenancy::all(), 'tenants' => Tenant::all()]);
    }

    public function create()
    {
        return view('tenancies.create', ['tenants' => Tenant::all()]);
    }

    public function store(Requests\StoreTenancyRequest $request)
    {
        $tenancy = Tenancy::create($request->all());
        
        $tenants = $request->get('tenants');
        Tenant::whereIn('id', array_keys($tenants))->update(['tenancy_id' => $tenancy->id]);

        return redirect(route('tenancies.index'))->with('message', 'Tenancy was created');
    }
}
