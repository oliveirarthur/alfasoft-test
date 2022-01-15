<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>

    @forelse ($contacts as $contact)
        <tr>
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->contact }}</td>
            <td>{{ $contact->email }}</td>
            <td>
                <a class="btn btn-primary" href="{{route('contacts.edit', [$contact->id])}}">Edit</a>
                <form action="{{ route('contacts.destroy', [$contact->id]) }}" method="POST" onsubmit="return remove(event, $contact->id, $contact->name)">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" >Remove</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">No contacts found</td>
        </tr>
    @endforelse
</table>

<div>
    <a href="{{ route('contacts.create') }}" class="btn btn-success">Add</a>
</div>


<script>
    function remove(event, id, name) {
        event.preventDefault()
        if (!confirm(`Tem certeza que deseja remover o contato ${name}?`)) {
            return false
        }
    }
</script>
