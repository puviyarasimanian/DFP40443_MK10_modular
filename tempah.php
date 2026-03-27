<h1 class="page-title">Borang Tempahan</h1>

<form method="POST" action="tempah_process.php">

    <div class="product-grid">

        <?php foreach ($data as $produk): ?>

            <div class="product-card">

                <h3><?= htmlspecialchars($produk['nama']) ?></h3>

                <?php foreach ($produk['harga'] as $saiz => $harga): ?>

                    <div class="product-option">

                        <label>
                            <?= ucwords(str_replace('_', ' ', $saiz)) ?>
                            (RM <?= number_format($harga, 2) ?>)
                        </label>

                        <input 
                            type="number"
                            name="tempahan[<?= $produk['id'] ?>][<?= $saiz ?>]"
                            value="0"
                            min="0"
                        >

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endforeach; ?>

    </div>

    <br>

    <input 
        type="text" 
        name="nama_pelanggan" 
        placeholder="Masukkan nama anda" 
        required
    >

    <br><br>

    <button type="submit">Teruskan</button>

</form>