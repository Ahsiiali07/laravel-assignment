<x-app-layout>
    <div class="container mt-5">
        <h1>Add Employee
            <a href="{{ route('employees.index') }}" class="btn btn-primary float-end">Employees</a>
        </h1>
        <form method="post" action="{{ route('employees.store') }}">
            @csrf
            @include('employees.form')
        </form>
    </div>
</x-app-layout>