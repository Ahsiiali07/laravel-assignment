<x-app-layout>
    <div class="container mt-5">
        <h1>Employees
            <a href="{{ route('employees.create') }}" class="btn btn-primary float-end">Create</a>
        </h1>

        @if(Session::has('success'))
            <p class="alert alert-success">{{ Session::get('success') }}</p>
        @endif
        @if(Session::has('error'))
            <p class="alert alert-danger">{{ Session::get('error') }}</p>
        @endif

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Position</th>
                <th scope="col">
                    
                </th>
            </tr>
            </thead>
            <tbody>
                @forelse ($employees as $employee)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><a href="{{ route('employees.show', $employee->id) }}">{{ $employee->name }}</a></td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>
                        <a href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                        <a href="{{ route('delete-employees', $employee->id) }}" class="text-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">Employees not found</td>
                </tr>    
                @endforelse
            </tbody>
        </table>

        <div class="d-flex float-end">
            {{ $employees->links()  }}
        </div>
      </div>
</x-app-layout>