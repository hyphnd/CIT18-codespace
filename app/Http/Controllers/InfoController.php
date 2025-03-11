<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;


class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info = Info::all();
        return view('info', compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('infoForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = $request->all();
        $info = new Info;
        $info ->addItem($record);
        Info::create($request->all());
        return redirect()->route('/info')->with('success', 'Info inserted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fetchedRecord = Info::where('id',$id)->first();
        return view('infoShow',$fetchedRecord->toArray());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fetchedRecord = Info::where('id',$id)->first();
        return view('infoForm',$fetchedRecord->toArray());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $record = $request->all();
        $items = new Info;
        $items->updateItem($id, $record);
        return redirect('/info');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'destroy';
    }
}
