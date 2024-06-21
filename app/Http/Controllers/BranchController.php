<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
     
        // return Inertia::render('Cms/Branch/Index')->with('alert', [
        //     'type' => 'success',
        //     'message' => 'Data has been saved successfully!',
        // ]);


        return Inertia::render('Cms/Branch/Index');


        // return redirect()->route('branch.index')->with('flash', [
        //     'type' => 'success',
        //     'message' => 'Data has been saved successfully!',
        // ]);



    

        // return Inertia::render('Cms/Branch/Index', [
        //     'type' => 'success',
        //     'message' => 'Data has been saved successfully!',
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return Inertia::render('Cms/Branch/Create');



    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

  

       // return Inertia::render('Cms/Branch/Index')->with('success', 'Post created successfully.');


        return redirect()->route('branch.index')->with('flash', [
            'success' => 'true',
            'type' => 'success',
            'message' => 'Data has been saved successfully!',
        ]);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
