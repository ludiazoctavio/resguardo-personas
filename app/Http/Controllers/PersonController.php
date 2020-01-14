<?php

namespace App\Http\Controllers;

use App\Person;
use App\Http\Requests\Person\StoreRequest;
use App\Http\Requests\Person\UpdateRequest;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:' . config('app.admin_role').'_supervisor-locatel_operador-locatel');
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
            'people' => Person::where('type_register_id', '=', 1)->get(),
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
            'ages' => \App\Catalogs\Age::all(),
            'nationalities' => \App\Catalogs\Nationality::orderBy('name', 'asc')->get(),
            'disabilities' => \App\Catalogs\Disability::orderBy('name', 'asc')->get(),
            'physical_healths' => \App\Catalogs\Physical_health::orderBy('name', 'asc')->get(),
            'mental_healths' => \App\Catalogs\Mental_health::orderBy('name', 'asc')->get(),
            'occupations' => \App\Catalogs\Occupation::orderBy('name', 'asc')->get(),
            'scholarships' => \App\Catalogs\Scholarship::orderBy('name', 'asc')->get(),
            'marital_statuses' => \App\Catalogs\Marital_status::orderBy('name', 'asc')->get(),
            'relationships' => \App\Catalogs\Relationship::orderBy('name', 'asc')->get(),
            'phone_types' => \App\Catalogs\Phone_type::orderBy('name', 'asc')->get(),
            'cities' => \App\Catalogs\Address_city::orderBy('name', 'asc')->get(),
            'states' => \App\Catalogs\Address_state::all(),
            'identification_types' => \App\Catalogs\Identification_type::orderBy('name', 'asc')->get(),
            'circumstances' => \App\Catalogs\Circumstance::orderBy('name', 'asc')->get(),
            'heights' => \App\Catalogs\Height::all(),
            'signal_types' => \App\Catalogs\Signal_type::all(),
            'body_parts' => \App\Catalogs\Body_part::all(),
            'sizes' => \App\Catalogs\Size::all(),
            'cloting_types' => \App\Catalogs\Clothing_type::all(),
            'colors' => \App\Catalogs\Color::orderBy('name', 'asc')->get(),
            'accessory_types' => \App\Catalogs\AccessoryType::all(),
            'half_affiliations' => \App\HalfAffiliationType::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, Person $person)
    {   
        $person = $person->store($request);
        return redirect()->route('dashboard.search.index');
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
        return view('person.locatel.edit', [
            'person' => $person,
            'genders' => \App\Catalogs\Gender::all(),
            'ages' => \App\Catalogs\Age::all(),
            'nationalities' => \App\Catalogs\Nationality::orderBy('name', 'asc')->get(),
            'disabilities' => \App\Catalogs\Disability::orderBy('name', 'asc')->get(),
            'physical_healths' => \App\Catalogs\Physical_health::orderBy('name', 'asc')->get(),
            'mental_healths' => \App\Catalogs\Mental_health::orderBy('name', 'asc')->get(),
            'occupations' => \App\Catalogs\Occupation::orderBy('name', 'asc')->get(),
            'scholarships' => \App\Catalogs\Scholarship::orderBy('name', 'asc')->get(),
            'marital_statuses' => \App\Catalogs\Marital_status::orderBy('name', 'asc')->get(),
            'relationships' => \App\Catalogs\Relationship::orderBy('name', 'asc')->get(),
            'phone_types' => \App\Catalogs\Phone_type::orderBy('name', 'asc')->get(),
            'cities' => \App\Catalogs\Address_city::orderBy('name', 'asc')->get(),
            'states' => \App\Catalogs\Address_state::all(),
            'identification_types' => \App\Catalogs\Identification_type::orderBy('name', 'asc')->get(),
            'circumstances' => \App\Catalogs\Circumstance::orderBy('name', 'asc')->get(),
            'heights' => \App\Catalogs\Height::all(),
            'signal_types' => \App\Catalogs\Signal_type::all(),
            'body_parts' => \App\Catalogs\Body_part::all(),
            'sizes' => \App\Catalogs\Size::all(),
            'cloting_types' => \App\Catalogs\Clothing_type::all(),
            'colors' => \App\Catalogs\Color::orderBy('name', 'asc')->get(),
            'accessory_types' => \App\Catalogs\AccessoryType::all(),
            'half_affiliations' => \App\HalfAffiliationType::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Person $person)
    {
        $person->my_update($request);
        return redirect()->route('dashboard.search.index');
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

        /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function ajaxRequest()

    {

        return view('ajaxRequest');

    }

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function ajaxRequestPost(Request $request)

    {

        $input = $request->all();
        //return response()->json(['success'=>$input['first_name']]);

        $qs = Person::all();
        if(count($request->all()) > 0){
            $arrayName = [];
            if($input['first_name'] != null){
                array_push($arrayName, ['first_name' , 'like', '%'.$input['first_name'].'%']);
            }
            if($input['last_name_1'] != null){
                array_push($arrayName, ['last_name_1', 'like', '%'.$input['last_name_1'].'%']);
            }
            if($input['last_name_2'] != null){
                array_push($arrayName, ['last_name_2', 'like', '%'.$input['last_name_2'].'%']);
            }
            $qs = $qs->where($arrayName);
            
            if ($request->date){
                $qs = $qs->whereHas('disappearance_report', function($q) use ($request){
                    $q->where('date', '=', date($request->date));
                });
            }
        }
        $qs->get();

        return response()->json(['success'=>$qs]);

    }
}
