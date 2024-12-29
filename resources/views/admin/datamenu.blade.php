@extends('layout.admin')

@section('content')
<style>
    #myTable {
        border-collapse: collapse;
        width: 100%;
       
    }

    #myTable th{
        border-bottom: 1px solid rgb(228, 166, 51); 
        border-top: 1px solid rgb(228, 166, 51);/
    }
    #myTable td {
        border-bottom: 1px solid rgb(68, 67, 67); 
       
    }

   

  
</style>

<script src=
"https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="content-wrapper" style="background-color: rgb(0, 0, 0);">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <div class="card" style="background-color: rgb(46, 44, 44); box-shadow: rgb(228, 166, 51) 5px 6px 12px;">
                        <div class="card-body">
                            <h1 style="text-align:center; color: rgb(228, 166, 51); font-family: 'Quintessential', cursive;"><b>Kelola Data Menu</b></h1>
                        </div>
                     
                    </div>
                    <div class="col-sm-6 text-end">
                      <ol class="breadcrumb mb-4">
                          <li class="breadcrumb-item"><a href="/home" style="color:white">Home</a></li>
                          <li class="breadcrumb-item active" style="color: rgb(228, 166, 51)">Data Menu</li>
                      </ol>
                  </div>
                  
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    
    <div class="container">
        <div class="card" style="box-shadow: rgb(228, 166, 51) 5px 6px 12px; background-color: rgb(37, 36, 36);">
            <div class="card-body">
                <div class="table-responsive-md">
                    <table id="myTable" class="table table-striped" style="color:  rgb(228, 166, 51) ">
                        <thead style="color:   rgb(228, 166, 51) ">
                            <tr>
                                <th>No</th>
                                <th>Name </th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Kcal</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody style="color: white">
                            @foreach($menus as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->category }}</td>
                                <td>{!! strip_tags($row->description) !!}</td>
                                <td>Rp.{{ number_format($row->price, 0, ',', '.') }}</td>
                                <td>{{ $row->kcal }}</td>
                                <td>
                                    <img src="{{ $row->image ? asset('storage/'.$row->image) : asset('default.jpg') }}" alt="" width="100px">
                                </td>
                                <td>
                                    <div style="display: inline-block; margin-right: 10px;">
                                        <a href="{{route('menu.edit', $row->id)}}">
                                            <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
                                                <i class="fas fa-edit" style="color: rgb(255, 187, 0);"></i>
                                            </button>
                                        </a>
                                    </div>
                                    <div style="display: inline-block;">
                                        <form action="{{ route('menu.delete', $row->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
                                                <i class="fas fa-trash-alt" style="color: rgb(255, 122, 122);"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
                

                <a href="{{route('menu.insert')}}"><i class="fas fa-plus-circle fa-3x"
                        style="float: right; margin-top: 2rem; padding-right: 2rem; color: rgb(228, 166, 51);"></i></a>
            </div>
        </div>
    </div>

</div>
<script>
    @if(session('success'))
    Swal.fire({
        title: 'Success!',
        text: '{{ session('success') }}',
        icon: 'success',
        confirmButtonText: 'OK'
    });
    @endif
    
</script>

@endsection