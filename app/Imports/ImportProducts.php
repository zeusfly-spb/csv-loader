<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportProducts implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'code' => $row[0],
            'name' => $row[1],
            'level1' => $row[2],
            'level2' => $row[3],
            'level3' => $row[4],
            'price' => $row[5],
            'price_sp' => $row[6],
            'quantity' => $row[7],
            'property_fields' => $row[8],
            'joint_purchases' => $row[9],
            'unit' => $row[10],
            'picture' => $row[11],
            'show_on_main' => $row[12],
            'description' => $row[13],
        ]);
    }
}
