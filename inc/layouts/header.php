<header class="mb-2 md:mb-8 flex justify-between items-center p-4 bg-white shadow-lg relative">
    <h1 class="text-4xl font-bold text-indigo-500">BlogCase</h1>

    <!-- Mobile Menu -->
    <?php if(isset($_SESSION['name'])) : ?>
    <div class="md:hidden">
        <button id="menu-btn" class="text-indigo-500 focus:outline-none">
            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>
    <?php else : ?>
    <a href="login.php" class="md:hidden bg-indigo-500 hover:bg-fuchsia-500 px-4 py-2 text-white rounded-xl text-lg">Login</a>
    <?php endif; ?>

    <!-- Desktop Menu -->
    <nav id="menu" class="hidden md:flex md:items-center md:space-x-4">
        <?php if(isset($_SESSION['name'])) : ?>
        <div class="relative">
            <button id="user-menu-btn" class="flex items-center space-x-2 bg-indigo-500 hover:bg-fuchsia-500 px-4 py-2 text-white rounded-xl text-lg">
                <span><?php echo $_SESSION['name']; ?></span>
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div id="user-menu" class="hidden absolute right-0 mt-2 w-48 bg-white border rounded-lg shadow-lg z-[100]">
                <a href="profile.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Profile</a>
                <a href="dashboard.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Dashboard</a>
                <a href="../logout.php" class="block px-4 py-2 text-red-600 hover:bg-gray-200">Logout</a>
            </div>
        </div>
        <?php else : ?>
        <a href="login.php" class="bg-indigo-500 hover:bg-fuchsia-500 px-4 py-2 text-white rounded-xl text-lg">Login</a>
        <?php endif; ?>
    </nav>

    <!-- Mobile Dropdown Menu (Appears Below Header) -->
    <div id="mobile-menu" class="hidden absolute left-0 right-0 top-full shadow-lg bg-white p-4 rounded-lg mt-2 flex flex-col space-y-2 md:hidden w-full z-[100]">
        <?php if(isset($_SESSION['name'])) : ?>
        <p class="text-lg font-semibold text-gray-700 px-4"><?php echo $_SESSION['name']; ?></p>
        <a href="profile.php" class="block bg-gray-100 px-4 py-2 text-gray-700">Profile</a>
        <a href="dashboard.php" class="block bg-gray-100 px-4 py-2 text-gray-700">Dashboard</a>
        <a href="logout.php" class="block bg-red-500 text-white px-4 py-2">Logout</a>
        <?php else : ?>
        <a href="login.php" class="block bg-indigo-500 text-white px-4 py-2">Login</a>
        <?php endif; ?>
    </div>
</header>

