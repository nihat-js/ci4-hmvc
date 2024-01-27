<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Dark Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            height: 100vh;
            background-color: #343a40;
            box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.1);
            transition: width 0.3s ease;
        }

        .sidebar:hover {
            width: 250px;
        }

        .sidebar-header {
            padding: 20px;
            color: #fff;
            background-color: #212529;
            transition: background-color 0.3s ease;
        }

        .sidebar:hover .sidebar-header {
            background-color: #343a40;
        }

        .sidebar-nav-link {
            color: #adb5bd;
        }

        .sidebar-nav-link:hover {
            color: #fff;
            text-decoration: none;
        }

        .sidebar-footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 10px 20px;
            background-color: #212529;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 col-lg-2 col-xl-2 sidebar">
            <div class="sidebar-header">
                <h4 class="mb-0">Elegant Sidebar</h4>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link sidebar-nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-nav-link" href="#">Contact</a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <small>&copy; 2024 Elegant Sidebar</small>
            </div>
        </nav>
        <!-- Page C
