<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Tenancy;
use App\Tenant;
use Illuminate\Http\Request;

class TenantsController extends Controller
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
        return view('tenants.index', ['tenants' => Tenant::all(), 'tenancies' => Tenancy::all()]);
    }

    public function create()
    {
        return view('tenants.create', ['tenancies' => Tenancy::all()]);
    }

    public function store(Requests\StoreTenantRequest $request)
    {
        $tenant = Tenant::create($request->except('image'));

        $request->file('image')->move(
            base_path() . '/public/images/tenants',
            $tenant->id . '.' . $request->file('image')->getClientOriginalExtension()
        );

        return redirect(route('tenants.index'))->with('message', 'Tenant was created');
    }
}
