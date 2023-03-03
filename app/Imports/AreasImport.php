<?php

namespace App\Imports;

use App\Models\Area;
use Maatwebsite\Excel\Concerns\ToModel;

class AreasImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Area([
            'nama_area' => $row[0],
        ]);
    }
    public function startRow(): int
    {
        return 0;
    }
}
