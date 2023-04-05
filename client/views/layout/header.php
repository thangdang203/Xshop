<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="./client/views/assets/css/style.css" />
</head>

<body>
    <!-- CONTAINER -->
    <div class="container-fluid">
        <!-- HEADER -->
        <header class="wrap-header">
            <!-- logo -->
            <div class="logo-main text-center p-4 bg-logo">
                <a>
                    <img src="./client/views/assets/images/logo.png" alt="" width="300px" />
                </a>
            </div>
            <!-- menu main -->
            <div class="menu-top">
                <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php?act=viewcart">
                            <img src="./client/views/assets/images/avt.png" alt="" width="40px;" class="rounded-pill" />
                        </a>
                        <div class="collapse navbar-collapse" id="mynavbar">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link active" href="javascript:void(0)">Trang chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?act=gioithieu" class="nav-link" href="javascript:void(0)">Giới thiệu</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?act=lienhe" class="nav-link" href="javascript:void(0)">Liên hệ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?act=gopy" class="nav-link" href="javascript:void(0)">Góp ý</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?act=hoidap" class="nav-link" href="javascript:void(0)">Hỏi đáp</a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="text" placeholder="Nhập nội dung tìm kiếm" />
                                <button class="btn btn-primary" type="button">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </header>