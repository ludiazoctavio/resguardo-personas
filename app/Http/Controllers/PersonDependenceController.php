<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonDependenceController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:' . config('app.admin_role'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('index', Person::class);
        return view('person.index', [
            'people' => Person::where('type_register_id', '==', 2)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Person::class);
        return view('person.dependence.create', [
            'genders' => \App\Catalogs\Gender::all(),
            'disabilities' => \App\Catalogs\Disability::all(),
            'phone_types' => \App\Catalogs\Phone_type::all(),
            'cities' => \App\Catalogs\Address_city::all(),
            'states' => \App\Catalogs\Address_state::all(),
            'identification_types' => \App\Catalogs\Identification_type::all(),
            'heights' => \App\Catalogs\Heights::all(),
            'signal_types' => \App\Catalogs\Signal_type::all(),
            'body_parts' => \App\Catalogs\Body_part::all(),
            'sizes' => \App\Catalogs\Size::all(),
            'cloting_types' => \App\Catalogs\Clothing_type::all(),
            'colors' => \App\Catalogs\Color::all(),
            'accessories' => \App\Catalogs\Accessory::all(),
            'vital_signs' => \App\Catalogs\Vital_signs::all(),
            'age_ranges' => \App\Catalogs\Age_range::all(),
        ]);
    }

    public function create_identified()
    {
        $this->authorize('create', Person::class);
        return view('person.dependence.identified.create', [
            'genders' => \App\Catalogs\Gender::all(),
            'nationalities' => \App\Catalogs\Nationality::all(),
            'disabilities' => \App\Catalogs\Disability::all(),
            'relationships' => \App\Catalogs\Relationship::all(),
            'phone_types' => \App\Catalogs\Phone_type::all(),
            'cities' => \App\Catalogs\Address_city::all(),
            'states' => \App\Catalogs\Address_state::all(),
            'identification_types' => \App\Catalogs\Identification_type::all(),
            'priorities' => \App\Catalogs\Priority::all(),
            'vital_signs' => \App\Catalogs\Vital_signs::all(),
            'ages' => \App\Catalogs\Age::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_identified(Request $request, Person $person)
    {
        $person = $person->store_dependence($request);
        return redirect()->route('dependence.search_dependence.index');
    }

    public function store(Request $request, Person $person)
    {
        $person = $person->store_dependence($request);
        return redirect()->route('dependence.search_dependence.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        $this->authorize('view', $person);
        return view('person.dependence.show', [
            'person' =>$person,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        $this->authorize('update', $person);
        return view('person.edit', [
            'person' =>$person,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        $person->my_update($request);
        return redirect()->route('dependence.person.show', $person);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $this->authorize('delete', $person);
        $person->delete();
        alert()->success('Persona eliminada')->showConfirmButton();
        return redirect()->route('dependence.person.index');
    }
}
