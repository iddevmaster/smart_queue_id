<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Branch;

class ManageBranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Branch::query();

        // Apply search filter if query is present
        if ($request->has('query')) {
            $query->where('name', 'like', '%' . $request->input('query') . '%');
        }

         $items = $query->paginate(10)->appends(['query' => $request->input('query')]);
         
          return Inertia::render('Cms/Admin/Branch/Index', [
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

        return Inertia::render('Cms/Admin/Branch/Create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $branch = new Branch();
        $branch->name = $request->input('name');
        $branch->detail = $request->input('detail');
        $branch->address = $request->input('address');
        $branch->tel = $request->input('tel');
        $branch->reserve_day = $request->input('reserve_day');
        $branch->cancel_day = $request->input('cancel_day');
        $branch->social = $request->input('social');
        $branch->save();


    

        return redirect()->route('managebranch.index')->with('flash', [
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
       

        $resource = Branch::findOrFail($id);
        return Inertia::render('Cms/Admin/Branch/Edit', [
            'data' => $resource,
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $savebranch = Branch::findOrFail($id)->update([
            'name'=> $request->name,
            'detail'=> $request->detail,
            'address'=> $request->address,
            'tel'=> $request->tel,
            'social'=> $request->social,
            'reserve_day'=> $request->reserve_day,
            'cancel_day'=> $request->cancel_day
        ]);

        //
        return redirect()->route('managebranch.index')->with('flash', [
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
      

        $de = Branch::where('id',$id)->delete();

        return redirect()->route('managebranch.index')->with('flash', [
            'success' => 'true',
            'type' => 'success',
            'message' => 'Delete Data successfully!',
        ]);
    }
}
