<?php

namespace App\Exports;

use App\SurveyResponse;
use Maatwebsite\Excel\Concerns\FromCollection;

class SurveyResponseExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SurveyResponse::all();
    }
}
