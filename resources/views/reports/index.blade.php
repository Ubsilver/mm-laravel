@extends('layouts.main')

@section('content')
<h1>Заявки</h1>
<div class="flex my-10 ">
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
                <td>
                    <form method="POST" action="{{route('reports.destroy',$report->id)}}">
                        @method('delete')
                        @csrf
                        <input type="submit" value="Удалить">
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <div>
        <h3>Создать отчет</h3>
        <div>
            <form method="POST">
                @csrf
                <input type="text" name="number" placeholder="Номер отчета">
                <input type="text" name="description" placeholder="Описание отчета">
                <input type="submit" value="Создать">
            </form>
        </div>
    </div>
</div>

@endsection