@extends('layout')

@section('title', 'Pesertadidik Page')

@section('content')
        <h1>Peserta Didik</h1>
        <div>
                <table cellpadding=10 cellspacing=0 border=1>
                        <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama Lengkap</th>
                                <th>JK</th>
                                <th>Kelas</th>
                                <th>Alamat</th>
                                <th>Status</th>
                        </tr>
                        @foreach ($data as $pesertadidik)
                        <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pesertadidik->nis }}</td>
                                <td>{{ $pesertadidik->namalengkap }}</td> 
                                <td>{{ $pesertadidik->jk }}</td> 
                                <td>{{ $pesertadidik->kelas }}</td> 
                                <td>{{ $pesertadidik->alamat }}</td> 
                                <td>{{ $pesertadidik->status }}</td> 
                               
                        </tr>
                @endforeach
                </table>
        </div>
@endsection