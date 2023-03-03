<?php

namespace App\Http\Controllers\Admin\Area;

use App\Imports\AreaImport;
use App\Imports\AreasImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ImportExcelController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'template' => 'required|mimes:xlsx,xls'
        ]);
        Excel::import(new AreasImport, $request->file('template')->store('temp'));
        return back();
    }
}
