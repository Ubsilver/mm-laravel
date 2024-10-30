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
                <th>Действия</th> <!-- Add a new header for actions -->
            </tr>
        </thead>
        <tbody>
            @foreach($reports as $report)
            <tr>
                <td>{{ $report->number }}</td>
                <td>{{ $report->description }}</td>
                <td>{{ $report->created_at }}</td>
                <td>
                    <form method="POST" action="{{ route('reports.destroy', $report->id) }}">
                        @method('delete')
                        @csrf
                        <input type="submit" value="Удалить">
                    </form>
                    <button onclick="toggleEditForm({{$report->id}})">Изменить</button>
                </td>
            </tr>
            <tr id="edit-form-{{ $report->id }}" style="display:none;">
                <td colspan="4">
                    <form method="POST" action="{{ route('reports.update', $report->id) }}">
                        @csrf
                        @method('PUT')
                        <input type="text" name="number" value="{{ $report->number }}" placeholder="Номер отчета">
                        <input type="text" name="description" value="{{ $report->description }}" placeholder="Описание отчета">
                        <input type="submit" value="Обновить">
                        <button type="button" onclick="toggleEditForm({{$report->id}})">Отмена</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        <h3>Создать отчет</h3>
        <form method="POST" action="{{ route('reports.store') }}">
            @csrf
            <input type="text" name="number" placeholder="Номер отчета">
            <input type="text" name="description" placeholder="Описание отчета">
            <input type="submit" value="Создать">
        </form>
    </div>
</div>

<script>
    function toggleEditForm(reportId) {
        const form = document.getElementById(`edit-form-${reportId}`);
        if (form.style.display === "none") {
            form.style.display = "table-row"; // Show the form
        } else {
            form.style.display = "none"; // Hide the form
        }
    }
</script>

@endsection