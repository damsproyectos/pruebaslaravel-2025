@csrf

<label for="name">Name</label>
<input class="form-control" type="text" name="name" value="{{ old('name', $role->name) }}">

<button type="submit" class="btn btn-success mt-2">Send</button>
<a href="{{ route('role.index') }}" class="btn btn-secondary mt-2">Back</a>

