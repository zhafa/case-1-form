<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 11 - Menghitung Future Value Annuity Due</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .calculator {
            max-width: 400px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
            margin-top: 20px;
            background-color: #EEEEEE;
        }
        .form-label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Memanggil file header dari folder template -->
    <?php include 'template/Header.html'?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="calculator"  ">
                    <h3 class="text-center mb-4">Kalkulator Future Value Annuity Due</h3>
                    <form action="Halaman2.php" method="GET">
                        <div class="mb-3">
                            <label for="payment" class="form-label">Pembayaran Periode (bulan)</label>
                            <input type="number" class="form-control" id="payment" name="payment" step="any" required>
                            <p>Contoh: 12 juta pertahun / 12 bulan = Rp. 1.000.000</p>
                        </div>
                        <div class="mb-3">
                            <label for="interest" class="form-label">Tingkat Bunga Pertahun (Bulan)</label>
                            <input type="number" class="form-control" id="interest" name="interest" step="any" required>
                            <p>Contoh: 15% pertahun = 0.012 Perbulan</p>
                        </div>
                        <div class="mb-3">
                            <label for="periods" class="form-label">Jumlah Periode (bulan)</label>
                            <input type="number" class="form-control" id="periods" name="periods" required>
                            <p>Contoh: 1 periode = 12 Bulan</p>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Hitung</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Memanggil file footer dari folder template -->
    <?php include "template/footers.html" ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
