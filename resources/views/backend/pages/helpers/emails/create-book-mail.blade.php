<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Data User</h1>
    <p>List User</p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Cover</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Published</th>
                <th scope="col">status</th>
                <th scope="col">Category</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($book as $item)
                <tr>

                    <td scope="row">{{ $no++ }}</td>
                    <td><img src="{{ asset('storage/' . $item->cover_book) }}" alt="" width="60px"></td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->author }}</td>
                    <td>{{ $item->published }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->category }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
