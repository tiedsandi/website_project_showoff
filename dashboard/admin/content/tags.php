<?php 
    include __DIR__ . '/../../../config/koneksi.php';

    if (!$conn) {
        die("Koneksi database gagal. Pastikan koneksi.php sudah benar.");
    }

    $querytag = mysqli_query($conn, "SELECT * FROM tags");
    $rowtag = mysqli_fetch_all($querytag, MYSQLI_ASSOC);  

    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $delete = mysqli_query($conn, "DELETE FROM tags WHERE id = '$id'");

        if ($delete) {
            header("location:?page=tags&update=success");
            exit;
        }
    }
?>

<div class="flex justify-center p-12">
    <div class="w-full max-w-screen-xl bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Data tag</h2>

        <div class="flex justify-end mb-6">
            <a href="?page=add-tags" class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">
                + Tambah Tag
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-gray-800">
                        <th class="border border-gray-400 px-6 py-3 text-left">No</th>
                        <th class="border border-gray-400 px-6 py-3 text-left">ID</th>
                        <th class="border border-gray-400 px-6 py-3 text-left">Nama tag</th>
                        <th class="border border-gray-400 px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($rowtag as $row): ?>
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-6 py-3"><?php echo $no++; ?></td>
                        <td class="border border-gray-300 px-6 py-3"><?php echo htmlspecialchars($row['id']); ?></td>
                        <td class="border border-gray-300 px-6 py-3"><?php echo htmlspecialchars($row['name']); ?></td>
                        <td class="border border-gray-300 px-6 py-3 text-center">
                            <a href="?page=add-tags&edit=<?php echo $row['id']; ?>" 
                                class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">
                                Edit
                            </a>
                            <a href="?page=tags&delete=<?php echo $row['id']; ?>" 
                                onclick="return confirm('Apakah Anda yakin ingin menghapus tag ini?')" 
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
