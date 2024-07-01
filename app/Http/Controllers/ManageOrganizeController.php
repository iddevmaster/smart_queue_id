<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Branch;
use App\Models\Organize;

class ManageOrganizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $query = Organize::query();
        if ($request->has('query')) {
            $query->where('name', 'like', '%' . $request->input('query') . '%');
        }

         $items = $query->paginate(10)->appends(['query' => $request->input('query')]);
         
          return Inertia::render('Cms/Admin/Organize/Index', [
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

        return Inertia::render('Cms/Admin/Organize/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

    
        $Org = new Organize();
        $Org->name = $request->input('name');
        $Org->addr = $request->input('addr');
        $Org->contact = $request->input('contact');
        $Org->save();

        return redirect()->route('manageorganize.index')->with('flash', [
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

        $resource = Organize::findOrFail($id);
        return Inertia::render('Cms/Admin/Organize/Edit', [
            'data' => $resource,
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $saveorg = Organize::findOrFail($id)->update([
            'name'=> $request->name,
            'addr'=> $request->addr,
            'contact'=> $request->contact
        ]);

        //
        return redirect()->route('manageorganize.index')->with('flash', [
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

        $de = Organize::where('id',$id)->delete();

        return redirect()->route('manageorganize.index')->with('flash', [
            'success' => 'true',
            'type' => 'success',
            'message' => 'Delete Data successfully!',
        ]);
    }
}
