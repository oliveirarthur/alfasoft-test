<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
</table>
@forelse ($contacts as $contact)
    <tr>
        <td>{{ $contact->id }}</td>
        <td>{{ $contact->name }}</td>
        <td>{{ $contact->contact }}</td>
        <td>{{ $contact->email }}</td>
        <td>
            <button class="btn btn-primary">Edit</button>
            <button class="btn btn-danger">Remove</button>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="5">No contacts found</td>
    </tr>
@endforelse
