<!DOCTYPE html>
<html>

<head>
    <title>Daftar User Web PPID Kota Probolinggo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Daftar User Web PPID Kota Probolinggo</h4>
        </h5>
    </center>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>ID</th>
        </tr>
        @php $i=1 @endphp
        @foreach($users as $hasil)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{$hasil->name}}</td>
            <td>{{$hasil->email}}</td>
            <td>{{implode(',', $hasil->roles()->get()->pluck('name')->toArray())}}</td>
            <td>{{$hasil->id}}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>