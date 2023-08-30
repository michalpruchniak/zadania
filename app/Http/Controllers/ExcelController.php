<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExcelController extends Controller
{
    public function index(Request $request)
    {
        $columns = $request->input('columns', 10);
        $rows = $request->input('rows', 10);

        if (!is_numeric($columns) || !is_numeric($rows) || $columns < 0 || $rows < 0) {
            return redirect('/zadanie2');
        }

        $tableData = [];
        $columnNames = $this->generateColumnNames($columns);

        for ($row = 1; $row <= $rows; $row++) {
            $rowData = [];
            for ($col = 1; $col <= $columns; $col++) {
                $cellLocation = $this->getCellLocation($col, $row);
                $rowData[] = [
                    'location' => $cellLocation
                ];
            }
            $tableData[] = $rowData;
        }

        return view('zadanie2.table', compact('tableData', 'columnNames'));
    }

    private function generateColumnNames($count)
    {
        $columnNames = [];
        for ($i = 0; $i < $count; $i++) {
            $columnName = $this->getColumnName($i + 1);
            $columnNames[] = $columnName;
        }
        return $columnNames;
    }

    private function getColumnName($num)
    {
        $columnName = '';
        while ($num > 0) {
            $modulo = ($num - 1) % 26;
            $columnName = chr(65 + $modulo) . $columnName;
            $num = (int)(($num - $modulo) / 26);
        }
        return $columnName;
    }

    private function getCellLocation($col, $row)
    {
        return "$row.$col";
    }
}
