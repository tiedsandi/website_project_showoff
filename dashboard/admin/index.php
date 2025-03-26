<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <?php 
    include_once 'layout_inc/navbar.php';
    ?>

    <div class="">
        <!-- Overlay (Klik untuk tutup sidebar) -->
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden"></div>

        <!-- Sidebar -->
        <?php 
        include_once 'layout_inc/sidebar.php';
        ?>

        <!-- Main Content -->
        <section class="section">
        <?php
        if(isset($_GET['page'])){
            if(file_exists('content/'. $_GET['page']. ".php")){
                include_once 'content/' . $_GET['page']. ".php";
            }
        }else{
            include_once 'content/home.php';
        }
         ?>
    </section>
        
    </div>

    <!-- Footer -->
    <?php 
    include_once 'layout_inc/footer.php';
    ?>

    <script>
        const menuToggle = document.getElementById('menuToggle');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const mainContent = document.getElementById('mainContent');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
        }

        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        }

        menuToggle.addEventListener('click', function() {
            if (sidebar.classList.contains('-translate-x-full')) {
                openSidebar();
            } else {
                closeSidebar();
            }
        });

        overlay.addEventListener('click', closeSidebar);

        // Pastikan sidebar tetap tersembunyi di semua ukuran layar kecuali dibuka
        window.addEventListener('resize', function() {
            closeSidebar();
        });
    </script>

</body>
</html>
