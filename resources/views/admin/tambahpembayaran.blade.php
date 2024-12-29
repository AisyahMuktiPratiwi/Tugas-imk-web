@extends('layout.admin')

@section('content')
<style>


</style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js" defer></script>

<div class="content-wrapper" style="background-color: rgb(0, 0, 0);">
    <div class="container">
        <div class="card shadow-sm" style="background-color: rgb(37, 36, 36);">
            <div class="card-body">
                <div class="card" style="background-color: rgb(65, 61, 61); color: rgb(228, 166, 51); box-shadow: 5px 6px 12px rgb(228, 166, 51);">
                    <h2 class="text-center" style="font-family: 'Quintessential', cursive;"><b>Add Data Metode Pembayayaran</b></h2>
                </div>

                <ol class="breadcrumb mb-4" style="background-color: rgb(37, 36, 36);">
                    <li class="breadcrumb-item"><a href="" style="color:rgb(228, 166, 51)">Add Metode Pembayaran</a></li>
                    <li class="breadcrumb-item active"><a href="/payments" style="color:white"> Data Metode Pembayaran  </a></li>
                </ol>

                <form action="{{route('payment.store')}}" method="POST" enctype="multipart/form-data" style="color:rgb(228, 166, 51);">
                    @csrf
                    <div class="row">
                     
                        <div class="col-md-12 d-flex mb-3">
                        
                            <div class="col-md-6" style="width: 33.3333%;">
                                <label for="nama" class="form-label">Method</label>
                                <input type="text" name="method" class="form-control" required style="background:none; color:rgb(228, 166, 51); border-color:rgb(228, 166, 51);">
                            </div>

                            <!-- Kategori -->
                            <div class="col-md-6" >
                                <label for="kategori" class="form-label">Kategori</label><br>
                                <select class="form-select" name="category" aria-label="Default select example" required style="color:rgb(228, 166, 51); background:none; border-color:rgb(228, 166, 51);">
                                    <option selected>--Pilih Kategori--</option>
                                
                                    <option value="bank" style="color:rgb(228, 166, 51); background:none; border-color:rgb(228, 166, 51);">Bank</option>
                               
                                    <option value="e-wallet" style="color:rgb(228, 166, 51); background:none; border-color:rgb(228, 166, 51);">E-wallet</option>
                               
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex mb-3">
                   
                         
                            <div class="col-md-6" style="width: 33.3333%;">
                                <label for="harga" class="form-label">Virtual Account</label>
                                <input type="text" class="form-control" name="virtual_account" required style="background:none; border-color: rgb(228, 166, 51); color:rgb(228, 166, 51);">
                            </div>
                            <div class="col-md-6" >
                                <div style="max-width: 150px; width: 50%;">
                                    <label for="gambar" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image" required style="background:none; border-color: rgb(228, 166, 51); color:rgb(228, 166, 51); width: 100%;">
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-12 d-flex mb-3">
                         
                            <div class="col-md-4" style="width: 33.3333%;">
                                
                            </div>

                        
                            <div class="col-md-4 d-flex flex-column align-items-center" >
                                
                            </div>

                            <div class="col-md-12 d-flex ">
                                <button type="submit" class="btn btn-primary" style="background-color: rgb(228, 166, 51);border-rounded:90%;width:15%;color:rgb(160, 0, 0)">Submit</button>
                            </div>
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

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js" defer></script>
@endsection
