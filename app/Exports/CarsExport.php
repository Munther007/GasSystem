<?php

namespace App\Exports;

use App\Models\Car;
use Maatwebsite\Excel\Concerns\FromCollection;

class CarsExport implements FromCollection
{
    public function collection()
    {
        return Car::all();
    }
}
