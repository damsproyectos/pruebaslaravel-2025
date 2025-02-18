<div>
    <h2><b>Permission</b></h2>

    <ul>
        @foreach ($permissionsRole as $p)
            <li>{{ $p->name }}</li>
        @endforeach
    </ul>

    <h3><b>Assign</b></h3>
    <form action="{{ route('role.assign.permission', $role->id) }}" method="POST">
        @csrf
        <select name="permission">
            @foreach ($permissions as $p)
                <option value="{{ $p->id }}">{{ $p->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
</div>
