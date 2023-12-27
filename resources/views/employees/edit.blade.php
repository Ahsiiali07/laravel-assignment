<x-app-layout>
    <div class="container mt-5">
        <h1>Update Employee
            <a href="{{ route('employees.index') }}" class="btn btn-primary float-end">Employees</a>
        </h1>
        <form method="post" action="{{ route('employees.update', $employee->id) }}">
            @csrf
            <input name="_method" type="hidden" value="PUT">
            <input type="hidden" name="id" value="{{ $employee->id }} />
            @include('employees.form')
        </form>
    </div>
</x-app-layout>