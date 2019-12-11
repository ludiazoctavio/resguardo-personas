<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'folio', 'type_register_id', 'dependence_id', 'first_name', 'last_name_1', 'last_name_2', 'age_id', 'age_range_id', 'gender_id', 'nationality_id', 'disability_id', 'physical_health_id', 'mental_health_id', 'occupation_id', 'scholarship_id', 'marital_status_id', 'priority_id', 'confidential', 'closed'
    ];

    //Relaciones
    public function type_register()
    {
        return $this->hasOne('App\Catalogs\TypeRegister', 'id', 'type_register_id');
    }

    public function dependence()
    {
        return $this->hasOne('App\Catalogs\Dependence', 'id', 'dependence_id');
    }

    public function age()
    {
        return $this->hasOne('App\Catalogs\Age', 'id', 'age_id');
    }

    public function age_range()
    {
        return $this->hasOne('App\Catalogs\Age_range', 'id', 'age_range_id');
    }

    public function gender()
    {
        return $this->hasOne('App\Catalogs\Gender', 'id', 'gender_id');
    }

    public function nationality()
    {
        return $this->hasOne('App\Catalogs\Nationality', 'id', 'nationality_id');
    }
    public function disability()
    {
        return $this->hasOne('App\Catalogs\Disability', 'id', 'disability_id');
    }
    public function priority()
    {
        return $this->hasOne('App\Catalogs\Priority', 'id', 'priority_id');
    }
    public function physical_health()
    {
        return $this->hasOne('App\Catalogs\Disability', 'id', 'physical_health_id');
    }
    public function mental_health()
    {
        return $this->hasOne('App\Catalogs\Mental_health', 'id', 'mental_health_id');
    }
    public function occupation()
    {
        return $this->hasOne('App\Catalogs\Occupation', 'id', 'occupation_id');
    }
    public function scholarship()
    {
        return $this->hasOne('App\Catalogs\Scholarship', 'id', 'scholarship_id');
    }
    public function marital_status()
    {
        return $this->hasOne('App\Catalogs\Marital_status', 'id', 'marital_status_id');
    }

    //Almacenamiento
    public function store($request)
    {
        $person = self::create($request->person + [
            'folio' => '1219-'.rand(1,9999),
            'type_register_id' => 1,
        ]);
        alert()->success('El registro de la persona se realizó con éxito.','Folio '.$person->folio)->showConfirmButton();
        return $person;
    }

    public function store_dependence($request)
    {
        //dd($request->person);
        $date = Carbon::now();
        $folio = $date;
        //dd($folio);
        $person = self::create($request->person + [
            'folio' => '1219-'.rand(1,9999),
            'type_register_id' => 2,
        ]);
        alert()->success('El registro de la persona se realizó con éxito.','Folio '.$person->folio)->showConfirmButton();
        return $person;
    }

    //Recuperacion de informacion

    public function getFullName()
    {
        return "{$this->first_name} {$this->last_name_1} {$this->last_name_2}";
    }
}
