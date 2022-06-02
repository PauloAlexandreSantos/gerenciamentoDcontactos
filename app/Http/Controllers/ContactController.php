<?php

namespace App\Http\Controllers;

use App\Apis\Country;
use App\Models\Contact;
use App\Models\People;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    private $country;

    public function __construct()
    {
        $this->country = new Country;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $response['countries'] = $this->country->get();


        $response['people'] = People::find($id);
        return view('admin.contact.create.index', $response);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $validation = $request->validate([
            'number' => 'required|numeric|size:9',
            'countryCode' => 'required',

        ]);


        $contact = Contact::create([
            'countryCode' => $request->countryCode,
            'number' => $request->number,
            'people_id' =>  $id,
        ]);

        return redirect()->route('contact.show', $id)->with('create', '1');
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
        $response['countries'] = $this->country->get();

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
        Contact::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }

}
