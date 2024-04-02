<table border="1" class="table">
    <tr>
        <th>No</th>
        <th>no_telp</th>
        <th>Username</th>
        <th>password</th>
        <th>role</th>
        <th colspan="2">Aksi</th>
    </tr>
    
    <?php
    // Menggunakan koneksi mysqli atau PDO yang benar
    include '../connect.php';

    // Select data dari tabel user
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM login ") or die(mysqli_error($mysqli));

    // Variabel nomor dimulai dari 1
    $nomor = 1;

    // Loop untuk menampilkan data dalam tabel
    while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['no_telp']; ?></td>
            <td><?php echo $data['Username']; ?></td>
            <td><?php echo $data['Password']; ?></td>
            <td><?php echo $data['Role']; ?></td>
            <td class="edit"><a href='edit.php?id=<?php echo $data['user_id'];?>'>Edit</a></td>
    <td class="delete"><a href='delete.php?id=<?php echo $data['user_id'];?>' background-color(#dff774)>Delete</a></td>
                <!-- Isi kolom aksi sesuai dengan kebutuhan -->
            </td>
        </tr>
    <?php } ?>
</table>