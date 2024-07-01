<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Dpm;

class ManageDpmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $query = Dpm::query();
        if ($request->has('query')) {
            $query->where('name', 'like', '%' . $request->input('query') . '%');
        }

         $items = $query->paginate(10)->appends(['query' => $request->input('query')]);
         
          return Inertia::render('Cms/Admin/Dpms/Index', [
              'query' => $query,
              'items' => $items,
          ]);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return Inertia::render('Cms/Admin/Dpms/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $dpm = new Dpm();
        $dpm->code = $request->input('code');
        $dpm->name = $request->input('name');
        $dpm->save();


    

        return redirect()->route('managedpms.index')->with('flash', [
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

        $resource = Dpm::findOrFail($id);
        return Inertia::render('Cms/Admin/Dpms/Edit', [
            'data' => $resource,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $saveorg = Dpm::findOrFail($id)->update([
            'name'=> $request->name,
            'code'=> $request->code
        ]);

        //
        return redirect()->route('managedpms.index')->with('flash', [
            'success' => 'true',
            'type' => 'success',
            'message' => 'Update Data successfully!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $de = Dpm::where('id',$id)->delete();

        return redirect()->route('manageorganize.index')->with('flash', [
            'success' => 'true',
            'type' => 'success',
            'message' => 'Delete Data successfully!',
        ]);
    }
}
