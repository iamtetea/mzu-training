@extends('layouts.app')

@section('content')
    <div class="container pt-3">
        <div class="row gx-3">
            <div class="col">
                <div class="text-center">CONTACT LISTS:</div>

                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">DETAILS</th>
                            <th scope="col">IMAGE</th>
                        </tr>
                    </thead>

                    @foreach ($contacts as $contact)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $contact->id }}</th>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->details }}</td>
                            <td>
                                @if ($contact->image_path)
                                    <img width="50%" src="{{ url('storage/' . $contact->image_path) }}" alt="contact">
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>

            <div class="col">
                <div class="text-center">
                    Please fill the form below to contact us.
                </div>

                @if (session()->get('success'))
                    <div class="mt-3 container alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif

                <form action="/contact" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" id="nameInput" aria-describedby="nameHelp">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="emailInput" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="detailsInput" class="form-label">Details</label>
                        <textarea name="details" rows="10" class="form-control" id="detailsInput"></textarea>
                        @error('details')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="imageInput" class="form-label">Upload image</label>
                        <input name="image" type="file" accept="image/*" class="form-control" id="imageInput" aria-describedby="imageHelp">
                        @error('image')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
