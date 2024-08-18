<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;

class CargarExcelController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv'
        ]);

        $file = $request->file('file')->getRealPath();

        // Cargar el archivo usando PHPSpreadsheet
        $spreadsheet = IOFactory::load($file);
        $sheet = $spreadsheet->getActiveSheet();
        $data = $sheet->toArray();

        // Transponer el array para que las columnas se conviertan en filas
        $transposedData = $this->transposeArray($data);
        //dd($transposedData);

        // Ahora, la primera fila de $transposedData será la primera columna original
        $columns = $transposedData[1];
        $values = array_slice($transposedData, 1);

        return view('chart', ['columns' => $columns, 'values' => $values]);
    }

    // Función para transponer un array bidimensional
    private function transposeArray(array $array)
    {
        $transposed = [];
        foreach ($array as $rowKey => $row) {
            foreach ($row as $colKey => $cell) {
                $transposed[$colKey][$rowKey] = $cell;
            }
        }
        return $transposed;
    }
}
