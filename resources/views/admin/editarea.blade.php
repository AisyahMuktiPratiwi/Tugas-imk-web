@extends('layout.admin')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js" defer></script>

<div class="content-wrapper" style="background-color: rgb(0, 0, 0);">
    <div class="container">
        <div class="card shadow-sm" style="background-color: rgb(37, 36, 36);">
            <div class="card-body">
                <div class="card" style="background-color: rgb(65, 61, 61); color: rgb(228, 166, 51); box-shadow: 5px 6px 12px rgb(228, 166, 51);">
                    <h2 class="text-center" style="font-family: 'Quintessential', cursive;"><b>Update Data Area</b></h2>
                </div>

                <ol class="breadcrumb mb-4" style="background-color: rgb(37, 36, 36);">
                    <li class="breadcrumb-item"><a href="" style="color:rgb(228, 166, 51)">Edit Data Area</a></li>
                    <li class="breadcrumb-item active"><a href="/areas" style="color:white"> Data Area </a></li>
                </ol>

                <form action="{{ route('area.update', $area->id) }}" method="POST" enctype="multipart/form-data" style="color:rgb(228, 166, 51);">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12 d-flex mb-3">
                            <div class="col-md-4" style="width: 33.3333%;">
                                <label for="nama" class="form-label">Name Area</label>
                                <input type="text" name="name" class="form-control" value="{{ $area->name }}" required style="background:none; color:rgb(228, 166, 51); border-color:rgb(228, 166, 51);">
                            </div>
                            <div class="col-md-4" style="width: 33.3333%;">
                                <label for="harga" class="form-label">Price</label>
                                <input type="text" class="form-control" name="price" value="{{ $area->price }}" required style="background:none; border-color: rgb(228, 166, 51); color:rgb(228, 166, 51);">
                            </div>
                            <div class="col-md-4">
                                <label for="gambar" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" style="background:none; border-color: rgb(228, 166, 51); color:rgb(228, 166, 51);">
                                @if ($area->image)
                                    <img src="{{ asset('storage/' . $area->image) }}" alt="Current Image" class="mt-2" style="max-width: 120px; height: auto;">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12 d-flex mb-1">
                            <div class="col-md-8" style="width: 66.6667%;">
                                <label for="deskripsi" class="form-label">Description</label>
                                <textarea id="deskripsi" name="description" style="border-color: rgb(228, 166, 51); color: rgb(228, 166, 51); background: none; width: 90%; height: 150px;">{{ $area->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary" style="background-color: rgb(228, 166, 51); border-radius: 70px; width: 15%; color: rgb(160, 0, 0);">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .content-wrapper {
        padding: 20px;
    }
    .card {
        margin-top: 20px;
    }
    .card-body {
        padding: 30px;
    }
    .form-label {
        color: rgb(228, 166, 51);
    }
    .btn-primary {
        background-color: rgb(228, 166, 51);
        color: white;
        border: none;
    }
    @media (max-width: 768px) {
        .row > div {
            margin-bottom: 10px;
        }
        .col-md-4, .col-md-8 {
            width: 100%;
        }
    }
</style>
@endsection
