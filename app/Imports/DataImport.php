<?php

namespace App\Imports;

use App\Models\Lgenal;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class DataImport implements ToCollection, WithHeadingRow, WithValidation
{

    public function collection(Collection $rows)
    {

        foreach ($rows as $row) {
            Lgenal::create([
                'cliente' => $row['cliente'],
                'rif' => $row['rif'],
                'serial' => $row['serial'],
                'model' => $row['model'],
                'location' => $row['location'],
                'date' => $row['date'],
                'cont_ante_bn' => $row['cont_ante_bn'],
                'cont_actu_bn' => $row['cont_actu_bn'],
                'volum_bn' => $row['volum_bn'],
                'cont_ante_color' => $row['cont_ante_color'],
                'cont_actu_color' => $row['cont_actu_color'],
                'volum_color' => $row['volum_color'],
                'scanImages' => $row['scan_images'],
                'scanJobs' => $row['scan_jobs'],
            ]);
        }

    }

    public function rules(): array
    {
        return [
            '*.cont_ante_bn' => [
                'integer',
                'required'
            ],
            '*.cont_actu_bn' => [
                'integer',
                'required'
            ]
        ];
    }
}