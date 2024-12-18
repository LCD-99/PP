<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Supplier</title>
    <!-- Link CSS (Bootstrap) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            background-color: white;
            padding: 30px;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .card-header {
            background-color: #6f42c1;
            color: white;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            padding: 20px;
        }

        .form-label {
            font-weight: 600;
            font-size: 16px;
            color: #333;
        }

        .form-control {
            border-radius: 10px;
            padding: 15px;
            font-size: 16px;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #6f42c1;
            box-shadow: 0 0 10px rgba(111, 66, 193, 0.2);
        }

        .btn-primary {
            background-color: #6f42c1;
            border-color: #6f42c1;
            font-size: 18px;
            padding: 14px 20px;
            border-radius: 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            width: 48%; /* Lebar tombol simpan */
        }

        .btn-primary:hover {
            background-color: #5a32a3;
            border-color: #5a32a3;
            transform: scale(1.05);
        }

        .btn-primary:focus {
            outline: none;
        }

        .btn-secondary {
            background-color: #ddd;
            border-color: #ddd;
            font-size: 18px;
            padding: 14px 20px;
            border-radius: 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            width: 48%; /* Lebar tombol kembali */
        }

        .btn-secondary:hover {
            background-color: #bbb;
            border-color: #bbb;
            transform: scale(1.05);
        }

        .btn-secondary:focus {
            outline: none;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 14px;
            color: #777;
            font-weight: bold;
        }

        /* Animasi fade-in untuk card */
        .card {
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .card {
                border-radius: 15px;
            }

            .btn-primary, .btn-secondary {
                font-size: 16px;
                padding: 12px 18px;
                width: 48%; /* Menyesuaikan tombol dengan ukuran layar kecil */
            }

            .form-control {
                font-size: 14px;
                padding: 12px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-user-plus"></i> Tambah Supplier
        </div>
        <div class="card-body">
            <!-- Form untuk menambah supplier -->
            <form action="{{ route('suppliers.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_supplier" class="form-label">Nama Supplier</label>
                    <input type="text" name="nama_supplier" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="kontak" class="form-label">Kontak</label>
                    <input type="text" name="kontak" class="form-control" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Supplier Management System</p>
    </div>
</div>

<!-- Link JS (Bootstrap JS dan Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
