<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use App\Imports\ImportProducts;

class ImportController extends Controller
{
    private $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function import(Request $request)
    {
        if ($request->hasFile('file')) {
            $this->excel->import(new ImportProducts, $request->file('file'));
        }
        return back();
    }

    /**
     * @param Request $request
     * @return string
     */
    public function getByApi(Request $request)
    {
        if ($request->hasFile('file')) {
            $this->excel->import(new ImportProducts, $request->file('file'));
            return 'Файл получен и обработан';
        } else {
            return 'Не найден файл';
        }
    }
}
