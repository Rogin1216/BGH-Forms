<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FormCollection;

class UsersExport implements FormCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }
}
