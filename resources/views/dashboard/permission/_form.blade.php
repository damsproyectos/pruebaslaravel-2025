@csrf

<label for="name">Name</label>
<input type="text" name="name" class="form-control" value="{{ old('name', $permission->name) }}">

<button type="submit" class="btn btn-success mt-2">Send</button>
<a href="{{ route('permission.index') }}" class="btn btn-secondary mt-2">Back</a>
