<!DOCTYPE html>
<html>

<head>
    <title>Daftar Permohonan</title>
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
        <h5>Daftar Permohonan</h4>
        </h5>
    </center>

    <table class="table table-striped table-md">
        <tr>
            <th>No</th>
            <th>Nomor Registrasi</th>
            <th>Judul Informasi</th>
            <th>Status</th>
            <th>Komponen Yang Dituju</th>
            <th></th>
        </tr>
        @foreach ($permohonan as $result => $pmhn)
        <tr>
            <td>{{$pmhn->id}}</td>
            <td><label for="">{{$pmhn->kode}}<br><small><i class="fas fa-calendar-week"></i> {{$pmhn->created_at->format('d-m-Y')}} </small> </label>
            </td>
            <td><label for="">{{$pmhn->judul}}<br><small><i class="fas fa-user"></i> {{$pmhn->nama}} </small> </label>
            </td>
            @if($pmhn->status === 0 )
            <td>
                <badge class="badge badge-info">Menunggu</badge>
            </td>
            @elseif($pmhn->status === 1 )
            <td>
                <badge class="badge badge-success">Diterima</badge>
            </td>
            @elseif($pmhn->status === 2 )
            <td>
                <badge class="badge badge-warning">Proses</badge>
            </td>
            @elseif($pmhn->status === 3 )
            <td>
                <badge class="badge badge-danger">Ditolak</badge>
            </td>
            @endif
            <td>{{$pmhn->dinas->nama}}</td>
            <td><a href="{{route('detail-info', $pmhn->id)}}"><i class="fas fa-folder-open"></i></a></td>
        </tr>
        @endforeach
    </table>

</body>

</html>