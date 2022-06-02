<?php

namespace App\Http\Controllers;

use App\Apis\Avatar;
use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{

    public function index()
    {
        $response['peoples'] = People::orderBy('name', 'asc')->get();
        return view('admin.people.list.index', $response);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.people.create.index');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|string|min:6|max:255',
            'email' => 'required|email|unique:peoples',

        ]);

        $avatar = new Avatar;

        $people = People::create([
            'name' => $request->name,
            'email' => $request->email,
            'avatar' =>  $avatar->get(),
        ]);

        return redirect()->route('people.show', $people->id)->with('create', '1');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $response['people'] = People::find($id);

        return view('admin.people.details.index', $response);
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $response['people'] = People::find($id);
        return view('admin.people.edit.index', $response);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'name' => 'required|string|min:6|max:255',
            'email' => 'required|email',

        ]);

        People::find($id)->update($request->all());
        return redirect()->route('people.show', $id)->with('edit', '1');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        People::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }

}
