<?php

namespace App\Imports;

use App\Student;
use App\File;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentsImport implements ToModel, WithValidation
{
    
    use Importable;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $file = File::latest()->first();

        return new Student([
            'file_id' => $file->id,
            'name' => $row[1],
            'gender' => $row[2],
            'image' => $row[3],
            'birthday' => $row[4],
            'point' => $row[5]
        ]);
    }

    public function rules(): array
    {
        return [
            '1'   => 'required',
            '2' => 'required',
            '5' => 'required|numeric'
        ];
    }

    // public function headingRow(): int
    // {
    //     return 0;
    // }
}
