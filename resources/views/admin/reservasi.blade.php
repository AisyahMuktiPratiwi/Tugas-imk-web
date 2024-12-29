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
                            <h1 style="text-align:center; color: rgb(228, 166, 51); font-family: 'Quintessential', cursive;"><b>Data Reservasi</b></h1>
                        </div>
                     
                    </div>
                    <div class="col-sm-6 text-end">
                      <ol class="breadcrumb mb-4">
                          <li class="breadcrumb-item"><a href="/home" style="color:white">Home</a></li>
                          <li class="breadcrumb-item active" style="color: rgb(228, 166, 51)">Data Reservasi</li>
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
                                <th>Invoice </th>
                                <th>Name</th>
                                <th>Area</th>
                                <th>Price</th>
                                <th>Reservation_date</th>
                                <th>Total guest</th>
                                <th>Payment Method</th>
                            </tr>
                        </thead>
                        <tbody style="color: white">
                            @foreach($reservations as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ optional($row->invoice)->invoice_number ?? 'No Invoice' }}</td>
                                <td>
                                    <a href="{{ optional($row->customer)->id ? route('reservations.detail', $row->customer->id) : '#' }}" style="color: white">
                                        {{ optional($row->customer)->name ?? 'No Customer' }}
                                    </a>
                                </td>
                                <td>{{ optional($row->area)->name ?? 'No Area' }}</td>
                                <td>{{ optional($row->area)->price ?? 'No Price' }}</td>
                                <td>{{ $row->reservation_date ?? 'No Date' }}</td>
                                <td>{{ $row->total_guest ?? 'No Guest' }}</td>
                                <td>{{ optional(optional($row->invoice)->payment)->method ?? 'No Payment Method' }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                        
                    </table>
                </div>

              
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
