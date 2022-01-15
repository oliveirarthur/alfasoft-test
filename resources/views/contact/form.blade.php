<form action="{{
    route(isset($contact)
        ? 'contacts.update'
        : 'contacts.store',
    isset($contact)
        ? [$contact->id]
        : []
    ) }}" method="POST">
    @csrf
    @method(isset($contact) ? 'PUT' : 'POST')
    <input type="hidden" name="id" value="{{isset($contact) ? $contact->id : ''}}">

    @if ($errors->first())
        <div class="bg-danger">{{ $errors->first() }}</div>
    @endif
    <div class="row">
        <div class="col-12">
            <label>
                Name:
                <input type="text" class="form-control" name="name" required min="5" value="{{ old('name', isset($contact) ? $contact->name : '') }}">
            </label>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label>
                Contact:
                <input type="text" class="form-control" name="contact" required min="9" max="9" value="{{ old('contact', isset($contact) ? $contact->contact : '') }}">
            </label>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label>
                Email:
                <input type="email" class="form-control" name="email" required value="{{ old('email', isset($contact) ? $contact->email : '') }}">
            </label>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <button type="submit">Save</button>
        </div>
    </div>
</form>
