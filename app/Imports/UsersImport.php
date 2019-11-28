<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name' => $row[0],
            'last_name_1' => $row[1],
            'last_name_2' => $row[2],
            'phone' => $row[3],
            'phone_extension' => $row[4],
            'email' => $row[5],
            'password' => Hash::make($row[6]),
        ]);
    }
}
