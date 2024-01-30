<?php
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 5,
    ],
];

$total_pembayaran = 0;

foreach ($barang as $item) {
    $harga_total_barang = $item['harga_barang'] * $item['jumlah_beli'];
    $total_pembayaran += $harga_total_barang;
}

echo "Total uang yang perlu dibayar: Rp " . $total_pembayaran;


