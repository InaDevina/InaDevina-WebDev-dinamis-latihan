<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Laptop</title>

    <style>
        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #F4A7BB;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #FFF0F4;
        }

        input[type="submit"] {
            background-color: red;
            color: white;
            border: none;
            padding: 7px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>

</head>
<body>
    @include('navbar')
    <table border="1">
        <thead>
            <tr>
                <th>Brand</th>
                <th>Model</th>
                <th>Processor</th>
                <th>RAM</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laptops as $laptop)
                <tr>
                    <td>{{ $laptop->brand }}</td>
                    <td>{{ $laptop->model }}</td>
                    <td>{{ $laptop->processor }}</td>
                    <td>{{ $laptop->ram }} GB</td>
                    <td>
                        <div style="display: flex; justify-content: center; gap: 8px;">
                            <form method="GET" action="{{ route('edit-laptop', $laptop->id) }}" style="display:inline">
                                <input style="background: blue; color: white" type="submit" value="Update">
                            </form>
                            <form method="POST" action="{{ route('delete-laptop') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $laptop->id }}">
                                <input style="background: red; color: white" type="submit" value="Delete">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
</body>
</html>
