@extends('layout.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Marble's| Dashboard Admin</title>
</head>

<body style="background-color: black">


    <div class="content-wrapper" style="background-color:rgb(0, 0, 0);">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-4 mt-2">
                    <div class="col-sm-6">
                        <h1 class="m-0" style="color: rgb(255, 255, 255);">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class=" col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/" style="color: white">Depan</a></li>
                            <li class="breadcrumb-item active" style="color: rgb(228, 166, 51)">Home</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                   

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="info-box mb-3" style="background-color:#660708;">
                            <span class="info-box-icon  elevation-1" style="background-color: rgb(228, 166, 51)"><i class=" fas fa-drumstick-bite" style="color: white"></i></span>

                            <div class="info-box-content" style="color: white;">
                                <span class="info-box-text">Menu</span>
                                <span class="info-box-number">{{$jumlahmenu}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="info-box mb-3" style="background-color:#660708;">
                            <span class="info-box-icon  elevation-1" style="background-color: rgb(228, 166, 51)"><i class="fas  fa-clipboard-list" style="color: white"></i></span>
                            <div class="info-box-content" style="color: white;">
                                <span class="info-box-text">Reservasi</span>
                                <span class="info-box-number">{{$jumlahreservasi}}</span> 
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                    <div class="col-12 col-sm-6 col-md-4" style="color: white;">
                        <div class="info-box mb-3" style="background-color:#660708;">
                            <span class="info-box-icon  elevation-1" style="background-color:  rgb(228, 166, 51)"><i class=" fas fa-comments" style="color: white"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Komentar</span>
                                <span class="info-box-number">{{$jumlahkomentar}}</span> 
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- /.col -->
                </div>



                
                
                
                <div class="welcome-box">
                    <h2>Selamat Datang di The Marble's</h2>
                </div>
                
                <style>
                    .welcome-box {
                        background-color: #660708; 
                        height: 20rem;
                        padding: 1px;
                        box-sizing: border-box;
                        margin: 10px auto;
                        box-shadow: 0 4px 8px rgb(255, 238, 0);
                        border-radius: 10px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        transition: transform 0.3s ease-in-out;
                        width: 95%; /* Lebar box diperluas */
                        max-width: 1200px; /* Lebar maksimal ditingkatkan */
                        text-align: center;
                    }
                
                    .welcome-box:hover {
                        transform: scale(1.05);
                    }
                
                    .welcome-box h2 {
                        color: rgb(255, 240, 103); 
                        margin: 0;
                        animation: textAnimation 2s infinite;
                        font-family: 'Pacifico', cursive;
                        font-size: 2rem;
                    }
                
                    @keyframes textAnimation {
                        0%,
                        100% {
                            opacity: 1;
                            transform: translateY(0);
                        }
                
                        50% {
                            opacity: 0.5;
                            transform: translateY(-10px);
                        }
                    }
                
                    @media (max-width: 768px) {
                        .welcome-box {
                            height: 15rem;
                        }
                
                        .welcome-box h2 {
                            font-size: 1.5rem;
                        }
                    }
                
                    @media (max-width: 480px) {
                        .welcome-box {
                            height: 12rem;
                        }
                
                        .welcome-box h2 {
                            font-size: 1.2rem;
                        }
                    }
                </style>
                
                <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
                
                
                
                

            </div>

    </div>
</body>

</html>
@endsection
