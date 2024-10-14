<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animes;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anime =Animes::all();
        // $anime = Animes::orderBy("price", 'desc')->get();

        return view("test.index", ['anime' => $anime]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $test = 'This is a create page';
        return view('test.create', ['test' => $test]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{


    // Optional: Validate the form inputs
    // $validated = $request->validate([
    //     'name' => 'required|string|max:255',
    //     'genre' => 'required|string',
    //     'year' => 'required|integer',
    //     'price' => 'required|numeric',
    // ]);

    // Assuming you're using a model called 'Animes' to save the data
    // Animes::create($validated);

    // Return a redirect response after successfully storing the data
    // $test = Animes::create($request->all());
        $animes = new Animes();
        $animes->name = $request->name;
        $animes->genre = $request->genre;
        $animes->year = $request->year;
        $animes->price = $request->price;

        $animes->save();
        return redirect()->route('test.index')->with('success','Added Successffully');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $anime =Animes::findOrFail($id);
        return view('test.show', ['anime'=> $anime]);
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
        Animes::findOrFail($id)->delete();
        return redirect()->route('test.index')->with('delete','Deleted Successfully');
    }
}