<?php  
    include __DIR__ . '/../../../config/koneksi.php';

    if (!$conn) {
        die("Koneksi database gagal. Pastikan koneksi.php sudah benar.");
    }

    // Ambil data tag untuk edit
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $sql_GET = mysqli_query($conn, "SELECT * FROM tags WHERE id='$id'");
        $result = mysqli_fetch_assoc($sql_GET);
    }

    // Proses Tambah Data
    if(isset($_POST['save'])){
        $tags_name = $_POST['tags_name'];

        $insert = mysqli_query($conn, "INSERT INTO tags (name) VALUES('$tags_name')");

        if($insert){
            header("location:?page=tags&add=success");  
            exit;
        }
    }

    // Proses Edit Data
    if(isset($_POST['edit'])){
        $id = $_POST['id']; // Ambil dari form
        $tags_name = $_POST['tags_name'];

        $update = mysqli_query($conn, "UPDATE tags SET name = '$tags_name' WHERE id = '$id'");

        if($update){
            header("location:?page=tags&update=success");
            exit;
        }
    }
?>

<div class="flex justify-center p-8">
    <div class="w-full max-w-lg bg-white shadow-lg rounded-lg p-6">
        <div class="border-b pb-4 mb-4">
            <h3 class="text-2xl font-semibold text-gray-800">
                <?php echo isset($_GET['edit']) ? "Edit tags" : "Create tags"; ?>
            </h3>
        </div>
        <form action="" method="post">
            <!-- Input hidden untuk menyimpan ID jika sedang mengedit -->
            <?php if(isset($_GET['edit'])): ?>
                <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <?php endif; ?>

            <div class="mb-4">
                <label for="tags_name" class="block text-gray-700 font-medium">tag Nama *</label>
                <input type="text" id="tags_name" name="tags_name" required
                    placeholder="Enter tags Name"
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
