<?php

namespace App\Http\Controllers;

use App\Models\privacy;
use App\Http\Requests\StoreprivacyRequest;
use App\Http\Requests\UpdateprivacyRequest;

class PrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('privacy.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreprivacyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(privacy $privacy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(privacy $privacy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprivacyRequest $request, privacy $privacy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(privacy $privacy)
    {
        //
    }
}
