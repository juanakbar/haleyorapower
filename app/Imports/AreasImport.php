<?php

namespace App\Imports;

use App\Models\Area;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class AreasImport implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // dd($row[0]);
        return new Area([
            'nama_area' => $row[0],
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
