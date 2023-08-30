<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class CallendarController extends Controller
{
    public function index(Request $request)
    {
        $month = $request->input('month', null);
        $year = $request->input('year', null);

        if ($month !== null && ($month < 1 || $month > 12)) {
            return view('zadanie1.error')->with('error', 'Nieprawidłowy numer miesiąca');
        }

        if ($year !== null && ($year < 1980 || $year > Carbon::now()->year)) {
            return view('zadanie1.error')->with('error', 'Nieprawidłowy rok');
        }

        $currentDate = Carbon::create($year ?: Carbon::now()->year, $month ?: Carbon::now()->month, 1);
        $currentDate->startOfMonth();

        $calendarDays = [];

        for ($i = 0; $i < $currentDate->dayOfWeekIso - 1; $i++) {
            $calendarDays[] = null;
        }

        while ($currentDate->month == ($month ?: Carbon::now()->month)) {
            $calendarDays[] = $currentDate->copy();
            $currentDate->addDay();
        }

        $daysInMonth = count($calendarDays);
        $daysToAdd = (7 - ($daysInMonth % 7)) % 7;

        for ($i = 0; $i < $daysToAdd; $i++) {
            $calendarDays[] = null;
        }

        $weeks = array_chunk($calendarDays, 7);

        $selectedMonthName = $currentDate->format('F');

        return view('zadanie1.calendar', compact('weeks', 'selectedMonthName'));
    }
}
