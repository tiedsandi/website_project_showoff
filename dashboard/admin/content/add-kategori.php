<?php  
    include __DIR__ . '/../../../config/koneksi.php';

    if (!$conn) {
        die("Koneksi database gagal. Pastikan koneksi.php sudah benar.");
    }

    // Ambil data kategori untuk edit
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $sql_GET = mysqli_query($conn, "SELECT * FROM categories WHERE id='$id'");
        $result = mysqli_fetch_assoc($sql_GET);
    }

    // Proses Tambah Data
    if(isset($_POST['save'])){
        $categories_name = $_POST['categories_name'];

        $insert = mysqli_query($conn, "INSERT INTO categories (name) VALUES('$categories_name')");

        if($insert){
            header("location:?page=kategori&add=success");  
            exit;
        }
    }

    // Proses Edit Data
    if(isset($_POST['edit'])){
        $id = $_POST['id']; // Ambil dari form
        $categories_name = $_POST['categories_name'];

        $update = mysqli_query($conn, "UPDATE categories SET name = '$categories_name' WHERE id = '$id'");

        if($update){
            header("location:?page=kategori&update=success");
            exit;
        }
    }
?>

<div class="flex justify-center p-8">
    <div class="w-full max-w-lg bg-white shadow-lg rounded-lg p-6">
        <div class="border-b pb-4 mb-4">
            <h3 class="text-2xl font-semibold text-gray-800">
                <?php echo isset($_GET['edit']) ? "Edit Categories" : "Create Categories"; ?>
            </h3>
        </div>
        <form action="" method="post">
            <!-- Input hidden untuk menyimpan ID jika sedang mengedit -->
            <?php if(isset($_GET['edit'])): ?>
                <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <?php endif; ?>

            <div class="mb-4">
                <label for="categories_name" class="block text-gray-700 font-medium">Kategori Nama *</label>
                <input type="text" id="categories_name" name="categories_name" required
                    placeholder="Enter Categories Name"
                    value="<?php echo isset($_GET['edit']) ? $result['name'] : ''; ?>"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="flex justify-end">
                <button type="submit" name="<?php echo isset($_GET['edit']) ? 'edit' : 'save'; ?>"
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                    <?php echo isset($_GET['edit']) ? 'Edit' : 'Save'; ?>
                </button>
            </div>
        </form>
    </div>
</div>
