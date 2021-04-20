<?php if (empty($mahasiswa) : ?>
    <tr>
        <td colspan="7">
            <h1>Data tidak ditemukan</h1>
        </td>
    </tr>
<?php else : ?>
    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <div class="update"><a href="ubah.php?id"<?= $mhs['id'] ?>">ubah</a></div>
                <div class="delete"><a href="hapus.php?id"<?= $mhs['id'] ?>"oneclick="return confrim('Hapus Data??')">Hapus</a></div>
            </td>
            <td><img src="../assets/img/<?= $mhs['img']; ?>" alt=""></td>
            <td><? $mhs['nrp']; ?></td>
            <td><? $mhs['nama']; ?></td>
            <td><? $mhs['email']; ?></td>
            <td><? $mhs['jurusan']; ?></td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>
<?php endif; ?>