@extends('layouts.main_layout')
@section('content')
    <div id="home">
        <div class="container">
            <div class="list_container">
                <h1>Employees</h1>
                <ul class="flex_wrap">
                    @foreach ($employees as $employee)
                        <li>
                            <div class="card flex-col">
                                <h3>{{ $employee->firstname }} {{ $employee->lastname }}</h3>
                                <p><i class="fas fa-map-marker-alt"></i> {{ $employee->location->street }}, {{ $employee->location->state }}</p>

                                <div class="tasks flex_wrap">
                                    <p><i class="fas fa-tasks"></i> ({{ $employee->tasks->count() }}) </p>
                                    <div class="task_list flex_col">
                                        @foreach ($employee->tasks as $task)
                                            <p>&#160;• {{ $task->name }}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
