@extends('layouts.app')
@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-6 border">
                <div class="mb-3 text-center">
                    <h4>Detail Item</h4>
                </div>
                <hr>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-sm">
                        <tbody>
                            <tr>
                                <th scope="row">Kode item</th>
                                <td>{{ $Items->code }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nama item</th>
                                <td>{{ $Items->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Harga</th>
                                <td>{{ $Items->harga }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Deskripsi</th>
                                <td>{{ $Items->deskripsi }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Satuan</th>
                                <td>{{ $Items->satuan_id }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('items.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                class="bi-arrow-left-circleme-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
