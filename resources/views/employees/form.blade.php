@csrf
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', @$employee->name) }}" placeholder="Name">
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', @$employee->email) }}" placeholder="email@example.com">
    @error('email')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="position" class="form-label">Position</label>
    <input type="text" name="position" class="form-control" value="{{ old('position', @$employee->position) }}" placeholder="Position">
    @error('position')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="col-auto float-end">
    <button type="submit" class="btn btn-primary mb-3">Save</button>
</div>