@extends('layout')

@section('title', 'Eskul Page')

@section('content')
        <h1>ESKUL</h1>
        <div>
                <table cellpadding=10 cellspacing=0 border=1>
                        <tr>
                                <th>No</th>
                                <th>Nama Eskul</th>
                                <th>Nama Pembina</th>
                                <th>Jumlah Anggota</th>
                                
                        </tr>
                        @foreach ($data as $eskul)
                        <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $eskul->namaeskul }}</td>
                                <td>{{ $eskul->namapembina }}</td>
                                <td>{{ $eskul->jumlahanggota }}</td>
                               
                        </tr>
                @endforeach
                </table>
        </div>
@endsection