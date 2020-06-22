<?php

namespace App\Exports;

use App\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

//Formating column
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;

//Mapping data
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

//Extending : Styling Sheet
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\BeforeWriting;
use Maatwebsite\Excel\Events\BeforeSheet;

use Maatwebsite\Excel\Events\AfterSheet;


class StudentsExport implements FromCollection, WithColumnFormatting, WithMapping, ShouldAutoSize, WithHeadings, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Student::all();
    }


    public function map($invoice): array
    {
        return [
            $invoice->id,
            $invoice->name,
            $invoice->gender,
            $invoice->image,
            $invoice->birthday,
            $invoice->point,
            Date::dateTimeToExcel($invoice->created_at),
            Date::dateTimeToExcel($invoice->updated_at),
        ];
    }
    
    public function columnFormats(): array
    {
        return [
            'G' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'H' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Gender',
            'Image',
            'Birthday',
            'Point',
            'Created_at',
            'Updated_at',
        ];
    }


    // Extending : Styling Sheet
    /**
     * @return array
     */
    public function registerEvents(): array
    {
        $styleArray = [
            'font' => [
                'bold' => true,
            ]
        ];

        return [
            // Handle by a closure.
            AfterSheet::class => function(AfterSheet $event) use ($styleArray){
                $event->sheet->getStyle('A1:H1')->applyFromArray($styleArray);
            },
            
        ];
    }
}
