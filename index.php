<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Produk - Toko Elektronik</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 20px;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    .product-card {
        max-width: 400px;
        margin: 20px auto;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    .product-header {
        background-color: #4CAF50;
        color: white;
        text-align: center;
        padding: 10px;
    }

    .product-content {
        padding: 20px;
        text-align: center;
    }

    .btn-order {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        margin-top: 10px;
    }

    .btn-order:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>

    <h1>Selamat Datang di Toko Elektronik</h1>

    <div class="product-card">
        <div class="product-header">
            <h2>Produk: Samsung</h2>
            <p>Jenis: Elektronik</p>
        </div>
        <div class="product-content">
            <?php
        class Product {
            public $jenis;
            public $merk;
            public $stok;

            public function pesanProduct() {
                if ($this->stok > 0) {
                    $this->stok = $this->stok - 1;
                    echo "Produk berhasil dipesan. Stok tersisa: {$this->stok}<br>";
                } else {
                    echo "Maaf, stok habis!<br>";
                }
            }
        }

        $product1 = new Product();
        $product1->jenis = "Elektronik";
        $product1->merk = "Samsung";
        $product1->stok = 20; 

        $product1->pesanProduct(); 
        $product1->pesanProduct(); 
        ?>
            <button class="btn-order" onclick="window.location.reload();">Pesan Lagi</button>
        </div>
    </div>

</body>

</html>