@csrf
<label for="title">Title</label>
<input class="form-control" type="text" name="title" value="{{ old('title',$category->title) }}">

<label for="slug">Slug</label>
<input class="form-control" type="text" name="slug" value="{{ old('slug',$category->slug) }}">

@if (isset($task) && $task == 'edit')
    <label for="image">Image</label>
    <input class="form-control" type="file" name="image" value="{{ old('image',$category->image) }}">
@endif

<button class="btn btn-success" type="submit">Send</button>

<a class="btn btn-secondary" href="{{ route('category.index') }}"><b>Back</b></a>
