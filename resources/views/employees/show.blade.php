<x-app-layout>
    <div class="container mt-5">
        <h1>Employee
            <a href="{{ route('employees.index') }}" class="btn btn-primary float-end">Employees</a>
        </h1>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" readonly name="name" class="form-control" value="{{ old('name', @$employee->name) }}" placeholder="Name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" readonly name="email" class="form-control" value="{{ old('email', @$employee->email) }}" placeholder="email@example.com">
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" readonly name="position" class="form-control" value="{{ old('position', @$employee->position) }}" placeholder="Position">
        </div>
    </div>
</x-app-layout>