<?php

namespace App\Http\Controllers;

use App\Person;
use App\Search;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __construct()
    {
        //$this->middleware('role:' . config('app.admin_role'));
        return true;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $qs = Person::all();
        if(count($request->all()) > 0){
            if ($request->folio){
                $qs = $qs->where('folio' , 'like', '%'.$request->folio.'%');
            }
            if ($request->name){
                $fullName = $this->split_name($request->name);
                $arrayName = [];
                if($fullName['first_name'] != null){
                    array_push($arrayName, ['first_name' , 'like', '%'.$fullName['first_name'].'%']);
                }
                if($fullName['middle_name'] != null){
                    array_push($arrayName, ['last_name_1', 'like', '%'.$fullName['middle_name'].'%']);
                }
                if ($fullName['last_name'] != null){
                    if($fullName['middle_name'] != null){
                        array_push($arrayName, ['last_name_2', 'like', '%'.$fullName['last_name'].'%']);
                    }else{
                        array_push($arrayName, ['last_name_1', 'like', '%'.$fullName['middle_name'].'%']);
                    }
                }else{
                    array_push($arrayName, ['last_name_1', 'like', '%'.$fullName['middle_name'].'%']);
                }
                $qs = $qs->where($arrayName);
            }
            if ($request->date){
                $qs = $qs->whereHas('disappearance_report', function($q) use ($request){
                    $q->where('date', '=', date($request->date));
                });
            }
        }
        $this->authorize('index', Search::class);
        return view('search.locatel.index', [
            'people' => $qs->where('type_register_id', '=', 1),
            'people_dependence' => $qs->where('type_register_id', '=', 2),
        ]);
    }

    public function split_name($string) {
        $arr = explode(' ', $string);
        $num = count($arr);
        $first_name = $middle_name = $last_name = null;
        if($num == 1){
            list($first_name) = $arr;
        } elseif ($num == 2) {
            list($first_name, $last_name) = $arr;
        } else {
            list($first_name, $middle_name, $last_name) = $arr;
        }
        return (empty($first_name) || $num > 3) ? false : compact(
            'first_name', 'middle_name', 'last_name'
        );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function show(Search $search)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function edit(Search $search)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Search $search)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function destroy(Search $search)
    {
        //
    }
}
