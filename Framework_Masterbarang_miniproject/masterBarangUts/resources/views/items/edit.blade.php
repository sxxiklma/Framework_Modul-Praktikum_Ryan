@extends('layouts.app')
@section('content')
    <div class="container-sm my-5 ">
        <form action="{{ route('items.update', ['item' => $Items->id]) }}" method="POST">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 col-xl-6">
                    <div class="mb-3 text-center">
                        <h4>Edit Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="code" class="formlabel">Kode Barang</label>
                            <input class="form-control
            @error('code') is-invalid @enderror" type="text"
                                name="code"id="code"
                                value="{{ $errors->any() ? old('code') : $Items->code }}"
                                placeholder="Enter Kode item">
                            @error('code')
                                <div class="textdanger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Nama item</label>
                            <input class="form-control @error('name')is-invalid @enderror" type="text"
                                name="name" id="name"
                                value="{{ $errors->any() ? old('name') : $Items->name }}"
                                placeholder="Enter Nama item">
                            @error('name')
                                <div class="textdanger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga" class="formlabel">Harga</label>
                            <input class="form-control @error('harga')is-invalid @enderror" type="text" name="harga"
                                id="harga" value="{{ $errors->any() ? old('harga') : $Items->harga }}"
                                placeholder="Enter Harga">
                            @error('harga')
                                <div class="textdanger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsi" class="formlabel">Deskripsi</label>
                            <input class="form-control @error('deskripsi') isinvalid @enderror" type="text" name="deskripsi"
                                id="deskripsi" value="{{ $errors->any() ? old('deskripsi') : $Items->deskripsi }}"
                                placeholder="Enter Deskripsi">
                            @error('deskripsi')
                                <div class="textdanger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="satuan" class="formlabel">Satuan</label>
                            <select name="satuan" id="satuan" class="form-select">
                                @php
                                    $selected = '';
                                    if ($errors->any()) {
                                        $selected = old('satuan');
                                    } else {
                                        $selected = $Items->satuan_id;
                                    }
                                @endphp
                                @foreach ($satuans as $satuan)
                                    <option value="{{ $satuan->id }}" {{ $selected == $satuan->id ? 'selected' : '' }}>
                                        {{ $satuan->code . '-' . $satuan->name }}</option>
                                @endforeach
                            </select>
                            @error('satuan')
                                <div class="textdanger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('items.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circleme-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark
            btn-lg mt-3"><i
                                    class="bi-check-circle me-2"></i>
                                Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
