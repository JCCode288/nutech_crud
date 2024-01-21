<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class JsonExport implements FromCollection, WithHeadings
{
    private $json;

    public function __construct($json)
    {
        $this->json = $json;
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return collect($this->json);
    }

    public function headings(): array
    {
        return array_keys($this->json[0]);
    }
}
