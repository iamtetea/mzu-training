<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Departments</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #dddddd;
            }

            .mt-5 {
                margin-top: 5px;
            }
            .mt-10 {
                margin-top: 10px;
            }
            .mt-20 {
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="mt-20">DEPARTMENT DETAILS</div>
        <form action="{{ '/departments/' . $data->id }}" method="post" class="mt-5">
            @csrf
            @method('PUT')

            <div class="mt-5"><input type="text" name="name" value="{{ $data->name }}" placeholder="Enter department name"></div>
            <div class="mt-5"><input type="text" name="branch" value="{{ $data->branch }}" placeholder="Enter department branch"></div>
            <div class="mt-5"><input type="number" name="limit" value="{{ $data->limit }}" placeholder="Enter department limit"></div>
            <div class="mt-5"><input type="text" name="code" value="{{ $data->code }}" placeholder="Enter department code"></div>
            <div class="mt-5"><input type="checkbox" name="is_active" {{ $data->is_active ? 'checked' : '' }}>ACTIVE</div>

            <div class="mt-10"><button type="submit">Submit</button></div>
        </form>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <li style="color: red" class="mt-5">{{ $error }}</li>
            @endforeach
        @endif
        @if (session()->get('success'))
            <div class="mt-10" style="color: green">{{ session()->get('success') }}</div>
        @endif
    </body>
</html>
