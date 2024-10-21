<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all();
        return view('reports.index', compact('reports'));
    }

    public function destroy(Report $report)
    {
        $report->delete();
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'number' => 'string',
            'description' => 'text',
        ]);
        Report::create($data);
        return redirect()->back();
    }
}
