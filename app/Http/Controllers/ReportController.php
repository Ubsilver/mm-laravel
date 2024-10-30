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
            'number' => 'required|string',
            'description' => 'required|string',
        ]);

        Report::create($data);
        return redirect()->back();
    }

    public function show(Report $report)
    {
        return view('reports.show', compact('report'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'number' => 'required|string',
            'description' => 'required|string',
        ]);

        $report = Report::findOrFail($id);
        $report->update($data);
        return redirect()->back();
    }
}
