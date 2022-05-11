<?php

namespace App\Http\Controllers;

use App\Models\Joboffert;
use App\Http\Controllers\Controller;
use App\Http\Requests\JobOffertRequest;

class JobOffertController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Returns all job offers with their associated candidates
     *
     * @return void
     */
    public function index()
    {
        $data = Joboffert::with('users')->orderBy('name')->get();

        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Create a new job offer and optionally create new candidates and assign them
     *
     * @param  \App\Http\Requests\JobOffertRequest $request
     * @return void
     */
    public function store(JobOffertRequest $request)
    {
        $offert = Joboffert::create($request->all());

        // Check for candidates
        if ($request->candidates) {
            foreach ($request->candidates as $value) {
                $value['password'] = 123456;
                $offert->users()->updateOrCreate($value);
            }
        }

        return response()->json([
            'data' => $offert
        ]);
    }
}
