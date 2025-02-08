@csrf
<label for="title">Title</label>
<input class="form-control" type="text" name="title" value="{{ old('title',$category->title) }}">

<label for="slug">Slug</label>
<input class="form-control" type="text" name="slug" value="{{ old('slug',$category->slug) }}">

@if (isset($task) && $task == 'edit')
    <label for="image">Image</label>
    <input class="form-control" type="file" name="image" value="{{ old('image',$category->image) }}">
@endif

<button class="btn btn-success mt-2" type="submit">Send</button>

<a class="btn btn-secondary mt-2" href="{{ route('category.index') }}"><b>Back</b></a>
