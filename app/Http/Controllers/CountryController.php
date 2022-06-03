<?php

namespace App\Http\Controllers;

use App\Apis\Country;
use App\Models\Contact;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    private $country;

    public function __construct()
    {
        $this->country = new Country();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['countries'] =  $this->country->get();

        $response['contacts'] = Contact::select('countryCode')->groupBy('countryCode')->get();

        return view('admin.country.list.index', $response);
    }
}
