<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-semibold mb-4">Register</h2>
        <form id="registerForm">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Email">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="Password">
            </div>
             <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm_password">
                    Confirm Password
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="confirm_password" name="confirm_password" type="password" placeholder="Confirm Password">
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Register
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="login.php">
                    Login
                </a>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
    $(document).ready(function() {
        let isToastActive = false; // Variabel untuk melacak status Toastify

        $('#registerForm').submit(function(e) {
            e.preventDefault();
            if (isToastActive) return; // Jika Toastify sedang aktif, jangan kirim permintaan lagi
            isToastActive = true; // Set status Toastify aktif

            var formData = $(this).serialize();

            $.ajax({
                url: 'inc/register_process.php',
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    let toastConfig = {
                        text: response.message,
                        duration: 3000,
                        callback: function() {
                            isToastActive = false; // Reset status Toastify setelah pesan hilang
                        }
                    };

                    if (response.status === 'success') {
                        toastConfig.backgroundColor = "linear-gradient(to right, #00b09b, #96c93d)";
                        Toastify(toastConfig).showToast();
                        setTimeout(function() {
                            window.location.href = "login.php";
                        }, 3000);
                    } else if (response.status === 'error') {
                        toastConfig.backgroundColor = "linear-gradient(to right, #ff5f6d, #ffc371)";
                        Toastify(toastConfig).showToast();
                    } else {
                        toastConfig.backgroundColor = "red";
                        toastConfig.text = "Terjadi kesalahan saat memproses permintaan.";
                        Toastify(toastConfig).showToast();
                    }
                },
                error: function() {
                    let toastConfig = {
                        text: "Terjadi kesalahan saat memproses permintaan.",
                        backgroundColor: "red",
                        duration: 3000,
                        callback: function() {
                            isToastActive = false;
                        }
                    };
                    Toastify(toastConfig).showToast();
                }
            });
        });
    });
    </script>
</body>
</html>