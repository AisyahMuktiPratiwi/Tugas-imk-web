@extends('layout.admin')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js" defer></script>

<div class="content-wrapper" style="background-color: rgb(0, 0, 0);">
    <div class="container">
        <div class="card shadow-sm" style="background-color: rgb(37, 36, 36);">
            <div class="card-body">
                <div class="card" style="background-color: rgb(65, 61, 61); color: rgb(228, 166, 51); box-shadow: 5px 6px 12px rgb(228, 166, 51);">
                    <h2 class="text-center" style="font-family: 'Quintessential', cursive;"><b>Edit Menu</b></h2>
                </div>

                <form action="{{ route('menu.update', $menus->id) }}" method="POST" enctype="multipart/form-data" style="color:rgb(228, 166, 51);">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <!-- Name Menu -->
                        <div class="col-md-4">
                            <label for="nama" class="form-label">Name Menu</label>
                            <input type="text" name="name" value="{{ $menus->name }}" class="form-control" 
                                style="background:none; color:rgb(228, 166, 51); border-color:rgb(228, 166, 51);">
                        </div>

                        <!-- Kategori -->
                        <div class="col-md-4 d-flex flex-column align-items-center">
                            <label for="kategori" class="form-label">Category</label>
                            <br>
                            <select class="form-select" name="category" style="color:rgb(228, 166, 51); background:none; border-color:rgb(228, 166, 51);">
                                <option value="{{ $menus->category }}">{{ $menus->category }}</option>
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

                        <!-- Price -->
                        <div class="col-md-4">
                            <label for="harga" class="form-label">Price</label>
                            <input type="text" class="form-control" name="price" value="{{ $menus->price }}" 
                                style="background:none; border-color: rgb(228, 166, 51); color:rgb(228, 166, 51);">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <!-- Description -->
                        <div class="col-md-6">
                            <label for="deskripsi" class="form-label">Description</label>
                            <textarea id="deskripsi" name="description" 
                                style="border-color: rgb(228, 166, 51); color: rgb(228, 166, 51); background: none; width: 100%; height: 150px;">{{ $menus->description }}</textarea>
                        </div>

                        <!-- Kcal and Image -->
                        <div class="col-md-6">
                            <label for="harga" class="form-label">Kcal</label>
                          
                            <div class="d-flex align-items-center mb-3">
                                <input type="text" class="form-control me-3" name="kcal" value="{{ $menus->kcal }}" 
                                    style="background:none; border-color: rgb(228, 166, 51); color:rgb(228, 166, 51); width: 50%;">
                               <br>
                               <br>
                                    
                            </div>
                            <label for="gambar" class="form-label">Image</label>
                            <br>
                            <img src="{{ asset('storage/' . $menus->image) }}" alt="Menu Image" style="width:100px; height: auto;">
                            <input type="file" class="form-control" name="image" 
                                style="background:none; border-color: rgb(228, 166, 51); color:rgb(228, 166, 51);">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="row mt-3">
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
