@extends("layouts.app")

@section("content")
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a contact</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('Contacts.update', $contact->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="first_name"> Name:</label>
                <input type="text" class="form-control" name="name" value={{ $contact->name }} />
            </div>

            <div class="form-group">
                <label for="last_name">Email:</label>
                <input type="text" class="form-control" name="email" value={{ $contact->email }} />
            </div>

            <div class="form-group">
                <label for="email">Phone:</label>
                <input type="text" class="form-control" name="phone" value={{ $contact->phone }} />
            </div>
            <div class="form-group">
                <label for="city">Web:</label>
                <input type="text" class="form-control" name="web" value={{ $contact->web }} />
            </div>
            <div class="form-group">
                <label for="country">Menssage:</label>
                <input type="text" class="form-control" name="menssage" value={{ $contact->menssage }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection