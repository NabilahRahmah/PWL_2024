<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Transaksi POS</title>

</head>
<body>
    <h1>Halaman Transaksi Penjualan (POS)</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product['name'] }}</td>
                <td>Rp {{ number_format($product['price'], 0, ',', '.') }}</td>
                <td>
                    <input type="number" name="quantity" value="1" min="1" id="quantity_{{ $product['id'] }}" onchange="calculateTotal({{ $product['id'] }}, {{ $product['price'] }})">
                </td>
                <td id="total_{{ $product['id'] }}">Rp {{ number_format($product['price'], 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Total Keseluruhan: <span id="grandTotal">Rp 0</span></h3>

    <button onclick="checkout()">Checkout</button>

    <!-- JavaScript untuk menghitung total -->
    <script>
        let grandTotal = 0;

        function calculateTotal(productId, price) {
            const quantity = document.getElementById('quantity_' + productId).value;
            const total = price * quantity;
            document.getElementById('total_' + productId).innerText = 'Rp ' + total.toLocaleString('id-ID');
            updateGrandTotal();
        }

        function updateGrandTotal() {
            grandTotal = 0;
            const rows = document.querySelectorAll('tbody tr');
            rows.forEach(row => {
                const total = row.querySelector('td:nth-child(4)').innerText.replace('Rp ', '').replace('.', '');
                grandTotal += parseInt(total);
            });
            document.getElementById('grandTotal').innerText = 'Rp ' + grandTotal.toLocaleString('id-ID');
        }

        function checkout() {
            alert('Total Pembelian: Rp ' + grandTotal.toLocaleString('id-ID'));
        }

        window.onload = function() {
            updateGrandTotal();
        };
    </script>
</body>
</html>