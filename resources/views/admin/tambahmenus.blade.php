@extends('layout.admin')

@section('content')
<style>
    /* Styling Responsiveness and Custom Appearance */
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
        border-radius: 25%;
        width: 15%;
    }

    .form-control,
    .form-select {
        background: none;
        border-color: rgb(228, 166, 51);
        color: rgb(228, 166, 51);
    }

    .breadcrumb a {
        color: rgb(228, 166, 51);
    }

    @media (max-width: 768px) {
        .row > div {
            margin-bottom: 10px;
        }

        .col-md-6,
        .col-md-4 {
            width: 100%;
        }

        .btn-primary {
            width: 100%; /* Full width for smaller screens */
        }
    }
</style>

<div class="content-wrapper" style="background-color: rgb(0, 0, 0);">
    <div class="container">
        <div class="card shadow-sm" style="background-color: rgb(37, 36, 36);">
            <div class="card-body">
                <div class="card" style="background-color: rgb(65, 61, 61); color: rgb(228, 166, 51); box-shadow: 5px 6px 12px rgb(228, 166, 51);">
                    <h2 class="text-center" style="font-family: 'Quintessential', cursive;"><b>Add Data Menu</b></h2>
                </div>

                <ol class="breadcrumb mb-4" style="background-color: rgb(37, 36, 36);">
                    <li class="breadcrumb-item">
                        <a href="" style="color:rgb(228, 166, 51)">Add Data Menu</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="/menus" style="color:white">Data Menu</a>
                    </li>
                </ol>

                <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data" style="color:rgb(228, 166, 51);">
                    @csrf
                    <div class="row">
                        <!-- Name, Category, and Price -->
                        <div class="col-md-12 d-flex mb-3">
                            <div class="col-md-4">
                                <label for="nama" class="form-label">Name Menu</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="col-md-4 d-flex flex-column align-items-center">
                                <label for="kategori" class="form-label">category</label>
                                <br>
                                <select class="form-select" name="category" required>
                                    <option selected>--Category Option--</option>
                                    <option value="appetizer">Appetizer</option>
                                    <option value="signature">Signature</option>
                                    <option value="luxury">Luxury</option>
                                    <option value="classic">Classic</option>
                                    <option value="side dishes">Side Dishes</option>
                                    <option value="sauces">Sauces</option>
                                    <option value="main courses">Main Courses</option>
                                    <option value="dessert">Dessert</option>
                                    <option value="beverage">Beverage</option>
                                    <option value="premium teas">Premium Teas</option>
                                    <option value="mocktails">Mocktails</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="harga" class="form-label">Price</label>
                                <input type="text" class="form-control" name="price" required>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="col-md-12 mb-3">
                            <label for="deskripsi" class="form-label">Description</label>
                            <textarea id="deskripsi" name="description" class="form-control" rows="4"></textarea>
                        </div>

                        <!-- Kcal and Image -->
                        <div class="col-md-12 d-flex flex-wrap gap-3 mb-3 ">
                            <div style="max-width: 150px; flex: 1;mr-2">
                                <label class="form-label">Kcal</label>
                                <input type="text" class="form-control" name="kcal" required>
                            </div>
                            <div style="max-width: 150px; flex: 1;">
                                <label for="gambar" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-warning">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js" defer></script>
@endsection
