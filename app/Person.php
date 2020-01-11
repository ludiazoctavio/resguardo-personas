<?php

namespace App;

use Carbon\Carbon;
use App\Egress;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'folio', 'type_register_id', 'dependence_id', 'first_name', 'last_name_1', 'last_name_2', 'age_id', 'age_range_id',
        'gender_id', 'nationality_id', 'disability_id', 'physical_health_id', 'mental_health_id', 'occupation_id', 'height_id',
        'scholarship_id', 'marital_status_id', 'priority_id', 'confidential', 'authorization', 'public', 'closed', 'user_id'
    ];

    //Relaciones
    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function entry()
    {
        return $this->hasOne('App\Entry');
    }

    public function egress()
    {
        return $this->hasOne('App\Egress');
    }

    public function person_report()
    {
        return $this->hasOne('App\Person_report');
    }

    public function disappearance_report()
    {
        return $this->hasOne('App\DisappearanceReport');
    }

    public function half_affiliation()
    {
        return $this->hasOne('App\HalfAffiliation');
    }

    public function aliases()
    {
        return $this->morphMany('App\Alias', 'aliasable');
    }

    public function identification()
    {
        return $this->morphOne('App\Identification', 'identificationable');
    }

    public function address()
    {
        return $this->morphOne('App\Address', 'addressable');
    }

    public function clothes()
    {
        return $this->hasMany('App\Clothing');
    }

    public function particular_signs()
    {
        return $this->hasMany('App\ParticularSign');
    }

    public function accessories()
    {
        return $this->hasMany('App\Accessory');
    }

    //Relaciones Catálogos
    public function type_register()
    {
        return $this->hasOne('App\Catalogs\TypeRegister', 'id', 'type_register_id');
    }

    public function dependence()
    {
        return $this->hasOne('App\Dependence', 'id', 'dependence_id');
    }

    public function age()
    {
        return $this->hasOne('App\Catalogs\Age', 'id', 'age_id');
    }

    public function age_range()
    {
        return $this->hasOne('App\Catalogs\Age_range', 'id', 'age_range_id');
    }

    public function height()
    {
        return $this->hasOne('App\Catalogs\Height', 'id', 'height_id');
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
        //dd($request);
        $person = self::create($request->person + [
            'folio' => $this->generate_folio(),
            'type_register_id' => 1,
            'dependence_id' => Auth::user()->dependence->id,
            'user_id' => Auth::id(),
        ]);

        $person_report = $person->person_report()->create($request->person_report + [
            'person_id' => $person->id,
        ]);

        $person_report->phones()->create($request->person_report_phone);
        $person_report->identification()->create($request->person_report_identification);
        $person_report->address()->create($request->person_report_address);

        $person->disappearance_report()->create($request->disappearance_report + [
            'person_id' => $person->id,
        ]);

        $person->disappearance_report->address()->create($request->disappearance_address);

        if (!empty($request->half_affiliation)) {
            $person->half_affiliation()->create($request->half_affiliation);
        }

        //Señas particulares
        $particular_signs = [];
        foreach ($request->particular_signs as $name => $value)
        {
            foreach ($value as $key => $row)
            {
                $particular_signs[$key][$name] = $row;
            }
        }
        $person->particular_signs()->createMany($particular_signs);

        //Ropa
        $clothes = [];
        foreach ($request->clothes as $name => $value)
        {
            foreach ($value as $key => $row)
            {
                $clothes[$key][$name] = $row;
            }
        }
        $person->clothes()->createMany($clothes);

        //Accesorios
        $accessories = [];
        foreach ($request->accessories as $name => $value)
        {
            foreach ($value as $key => $row)
            {
                $accessories[$key][$name] = $row;
            }
        }
        $person->accessories()->createMany($accessories);

        alert()->success('El registro de la persona se realizó con éxito.','Folio '.$person->folio)->showConfirmButton();
        return $person;
    }


    public function store_dependence($request)
    {

        $person = self::create($request->person + [
            'folio' => $this->generate_folio(),
            'type_register_id' => 2,
            'dependence_id' => Auth::user()->dependence->id,
            'user_id' => Auth::id(),
        ]);
        

        $entry = $person->entry()->create($request->entry);

        //Datos acompañante en el ingreso
        if (!empty($request->companion)) {
            $companion = $entry->companion()->create($request->companion);
            if (!empty($request->companion_identification)) {
                $companion->identification()->create($request->companion_identification);
            }
            if (!empty($request->companion_address)) {
                $companion->address()->create($request->companion_address);
            }
        }

        if (!empty($request->half_affiliation)) {
            $person->half_affiliation()->create($request->half_affiliation);
        }

        if (!empty($request->identification)) {
            $person->identification()->create($request->identification);
        }else {
            $person->identification()->create([]);
        }

        //Señas particulares
        if (!empty($request->particular_signs)) {
            $particular_signs = [];
            foreach ($request->particular_signs as $name => $value)
            {
                foreach ($value as $key => $row)
                {
                    $particular_signs[$key][$name] = $row;
                }
            }
            $person->particular_signs()->createMany($particular_signs);
        }

        //Ropa
        if (!empty($request->clothes)) {
            $clothes = [];
            foreach ($request->clothes as $name => $value)
            {
                foreach ($value as $key => $row)
                {
                    $clothes[$key][$name] = $row;
                }
            }
            $person->clothes()->createMany($clothes);
        }

        //Accesorios
        if (!empty($request->accessories)) {
            $accessories = [];
            foreach ($request->accessories as $name => $value)
            {
                foreach ($value as $key => $row)
                {
                    $accessories[$key][$name] = $row;
                }
            }
            $person->accessories()->createMany($accessories);
        }

        $egress = $person->egress()->create([]);
        $egress_companion = $egress->companion()->create([]);
        $egress_companion->identification()->create([]);
        $egress_companion->address()->create([]);
        
        alert()->success('El registro de la persona se realizó con éxito.','Folio '.$person->folio)->showConfirmButton();
        return $person;
    }

    public function my_update($request)
    {
        self::update($request->person);

        self::person_report()->update($request->person_report);

        $this->person_report->phones()->update($request->person_report_phone);
        $this->person_report->identification()->update($request->person_report_identification);
        $this->person_report->address()->update($request->person_report_address);

        self::disappearance_report()->update($request->disappearance_report);

        $this->disappearance_report->address()->update($request->disappearance_address);

        if (!empty($request->half_affiliation)) {
            self::half_affiliation()->update($request->half_affiliation);
        }

        alert()->success('La actualización del registro de la persona se realizó con éxito.', 'Folio '.$this->folio)->showConfirmButton();
    }

    public function my_update_dependence($request)
    {
        self::update($request->person);

        self::entry()->update($request->entry);
        
        //Datos acompañante en el ingreso
        if (!empty($request->companion)) {            
            $this->entry->companion()->update($request->companion);
            if (!empty($request->companion_identification)) {
                $this->entry->companion->identification()->update($request->companion_identification);
            }
            if (!empty($request->companion_address)) {
                $this->entry->companion->address()->update($request->companion_address);
            }
        }

        //Datos acompañante en el egreso
        self::egress()->update($request->egress);
        
        if (!empty($request->companion_egress)) {
            $this->egress->companion()->update($request->companion_egress);
            if (!empty($request->companion_egress_identification)) {
                $this->egress->companion->identification()->update($request->companion_egress_identification);
            }
            if (!empty($request->companion_egress_address)) {
                $this->egress->companion->address()->update($request->companion_egress_address);
            }
        }
        
        if (!empty($request->half_affiliation)) {
            self::half_affiliation()->updateOrCreate($this->half_affiliation->first('id')->toArray(), $request->half_affiliation);
        }

        self::identification()->updateOrCreate($this->identification->first('id')->toArray(), $request->identification);

        //Señas particulares
        /*
        $particular_signs = [];
        foreach ($request->particular_signs as $name => $value)
        {
            foreach ($value as $key => $row)
            {
                $particular_signs[$key][$name] = $row;
            }
        }
        */
        //self::particular_signs()->rawUpdate($particular_signs);

        //Ropa
        /*
        $clothes = [];
        foreach ($request->clothes as $name => $value)
        {
            foreach ($value as $key => $row)
            {
                $clothes[$key][$name] = $row;
            }
        }*/
        //self::clothes()->rawUpdate($clothes);
        
        alert()->success('La actualización del registro de la persona se realizó con éxito.', 'Folio '.$this->folio)->showConfirmButton();
    }


    //Recuperacion de informacion

    public function getFullName()
    {
        return "{$this->first_name} {$this->last_name_1} {$this->last_name_2}";
    }

    //Otras
    public function generate_folio()
    {
        $date = Carbon::now()->format('dmy');
        $folio = $date.'-'.str_pad(rand(1,9999), 4, "0", STR_PAD_LEFT);
        $folio_exists = Person::where('folio', '=', $folio)->get();
        if ($folio_exists->isNotEmpty()) {
            return $this->generate_folio();
        }else {
            return $folio;
        }
    }
}
