@extends('layouts.main')

@section('content') 
    <h1>Заявки</h1>
    <table>
        <thead>
            <tr>
                <th>Номер</th>
                <th>Описание</th>
                <th>Дата создания</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reports as $report)
                <tr>
                    <td>{{ $report->number }}</td>
                    <td>{{ $report->description }}</td>
                    <td>{{ $report->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection