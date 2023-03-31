@extends('layouts.default')

@section('conten')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Barang</label>
                    <input type="text" name="name" value="{{ old('name') }}"
                        class="form-control @error('type') is-invalid @enderror" />
                    @error('name')
                        <div class="text-muted"> {{ $message }} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="type" class="form-control-label">Tipe Barang</label>
                    <input type="text" name="type" value="{{ old('type') }}"
                        class="form-control @error('type') is-invalid @enderror" />
                    @error('type')
                        <div class="text-muted"> {{ $message }} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description" class="form-control-label">Deskripsi Barang</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" {{ old('description') }}> </textarea>
                    @error('description')
                        <div class="text-muted"> {{ $message }} </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price" class="form-control-label">Tipe Barang</label>
                    <input type="text" name="price" value="{{ old('price') }}"
                        class="form-control @error('price') is-invalid @enderror" />
                    @error('price')
                        <div class="text-muted"> {{ $message }} </div>
                    @enderror
                </div>
            </form>
        </div>
    </div>
@endsection
