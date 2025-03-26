<?php 
    include __DIR__ . '/../../../config/koneksi.php';

    if (!$conn) {
        die("Koneksi database gagal. Pastikan koneksi.php sudah benar.");
    }

    $queryKategori = mysqli_query($conn, "SELECT * FROM categories");
    $rowKategori = mysqli_fetch_all($queryKategori, MYSQLI_ASSOC);  

    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $delete = mysqli_query($conn, "DELETE FROM categories WHERE id = '$id'");

        if ($delete) {
            header("location:?page=kategori&update=success");
            exit;
        }
    }
?>

<div class="flex justify-center p-12">
    <div class="w-full max-w-screen-xl bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Data Kategori</h2>

        <div class="flex justify-end mb-6">
            <a href="?page=add-kategori" class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">
                + Tambah Kategori
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-gray-800">
                        <th class="border border-gray-400 px-6 py-3 text-left">No</th>
                        <th class="border border-gray-400 px-6 py-3 text-left">ID</th>
                        <th class="border border-gray-400 px-6 py-3 text-left">Nama Kategori</th>
                        <th class="border border-gray-400 px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($rowKategori as $row): ?>
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-6 py-3"><?php echo $no++; ?></td>
                        <td class="border border-gray-300 px-6 py-3"><?php echo htmlspecialchars($row['id']); ?></td>
                        <td class="border border-gray-300 px-6 py-3"><?php echo htmlspecialchars($row['name']); ?></td>
                        <td class="border border-gray-300 px-6 py-3 text-center">
                            <a href="?page=add-kategori&edit=<?php echo $row['id']; ?>" 
                                class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">
                                Edit
                            </a>
                            <a href="?page=kategori&delete=<?php echo $row['id']; ?>" 
                                onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')" 
                                class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                                Hapus
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
