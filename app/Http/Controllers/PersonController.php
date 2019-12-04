<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
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
            'people' => Person::all(),
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
        return view('person.locatel.create', [
            'genders' => \App\Catalogs\Gender::all(),
            'nationalities' => \App\Catalogs\Nationality::all(),
            'disabilities' => \App\Catalogs\Disability::all(),
            'physical_healths' => \App\Catalogs\Physical_health::all(),
            'mental_healths' => \App\Catalogs\Mental_health::all(),
            'occupations' => \App\Catalogs\Occupation::all(),
            'scholarships' => \App\Catalogs\Scholarship::all(),
            'marital_statuses' => \App\Catalogs\Marital_status::all(),
            'relationships' => \App\Catalogs\Relationship::all(),
            'phone_types' => \App\Catalogs\Phone_type::all(),
            'cities' => \App\Catalogs\Address_city::all(),
            'states' => \App\Catalogs\Address_state::all(),
            'identification_types' => \App\Catalogs\Identification_type::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Person $person)
    {
        $person = $person->store($request);
        return redirect()->route('dashboard.person.show', $person);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        $this->authorize('view', $person);
        return view('person.locatel.show', [
            'person' =>$person,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
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
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        $person->my_update($request);
        return redirect()->route('dashboard.person.show', $person);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $this->authorize('delete', $person);
        $person->delete();
        alert()->success('Persona eliminada')->showConfirmButton();
        return redirect()->route('dashboard.person.index');
    }
}
