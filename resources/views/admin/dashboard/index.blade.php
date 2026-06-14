<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        body{
            background:#f5f7fb;
        }

        .sidebar{
            width:250px;
            min-height:100vh;
            position:fixed;
            background:linear-gradient(180deg,#2563eb,#1e40af);
            color:white;
            padding:25px;
        }

        .sidebar a{
            display:block;
            color:white;
            text-decoration:none;
            padding:12px;
            margin-bottom:10px;
            border-radius:10px;
            transition:.3s;
        }

        .sidebar a:hover{
            background:rgba(255,255,255,.15);
        }

        .content{
            margin-left:270px;
            padding:30px;
        }

        .welcome{
            background:linear-gradient(135deg,#2563eb,#38bdf8);
            color:white;
            padding:30px;
            border-radius:20px;
            margin-bottom:25px;
        }

        .stat-card{
            border:none;
            border-radius:20px;
            color:white;
            padding:25px;
            box-shadow:0 10px 20px rgba(0,0,0,.1);
        }

        .card1{
            background:linear-gradient(135deg,#2563eb,#60a5fa);
        }

        .card2{
            background:linear-gradient(135deg,#10b981,#34d399);
        }

        .card3{
            background:linear-gradient(135deg,#f59e0b,#fbbf24);
        }

        .stat-card h1{
            font-size:50px;
            font-weight:bold;
        }

        .menu-card{
            border-radius:20px;
            color:white;
            text-decoration:none;
            padding:25px;
            display:block;
            transition:.3s;
        }

        .menu-card:hover{
            transform:translateY(-5px);
        }

        .blue{
            background:#2563eb;
        }

        .green{
            background:#10b981;
        }

        .red{
            background:#ef4444;
        }
    </style>
</head>
<body>

<div class="sidebar">

    <h3>
        <i class="fa-solid fa-toolbox"></i>
        Sistem Alat
    </h3>

    <hr>

    <a href="/admin/dashboard">
        <i class="fa-solid fa-house"></i>
        Dashboard
    </a>

    <a href="/kategori">
        <i class="fa-solid fa-layer-group"></i>
        Data Kategori
    </a>

    <a href="/alat">
        <i class="fa-solid fa-screwdriver-wrench"></i>
        Data Alat
    </a>

    <a href="/logout">
        <i class="fa-solid fa-right-from-bracket"></i>
        Logout
    </a>

</div>

<div class="content">

    <div class="welcome">
        <h2>👋 Selamat Datang Admin</h2>
        <p>Kelola Sistem Peminjaman Alat dengan mudah dan cepat.</p>
    </div>

    <div class="row">

        <div class="col-md-4 mb-3">
            <div class="stat-card card1">
                <h5>Total Kategori</h5>
                <h1>{{ $totalKategori }}</h1>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="stat-card card2">
                <h5>Total Alat</h5>
                <h1>{{ $totalAlat }}</h1>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="stat-card card3">
                <h5>Total Peminjaman</h5>
                <h1>{{ $totalPeminjaman }}</h1>
            </div>
        </div>

    </div>

    <h4 class="mt-4 mb-3">Menu Cepat</h4>

    <div class="row">

        <div class="col-md-4">
            <a href="/kategori" class="menu-card blue">
                <h4><i class="fa-solid fa-layer-group"></i> Data Kategori</h4>
            </a>
        </div>

        <div class="col-md-4">
            <a href="/alat" class="menu-card green">
                <h4><i class="fa-solid fa-toolbox"></i> Data Alat</h4>
            </a>
        </div>

        <div class="col-md-4">
            <a href="/logout" class="menu-card red">
                <h4><i class="fa-solid fa-right-from-bracket"></i> Logout</h4>
            </a>
        </div>

    </div>

</div>

</body>
</html>
