<!-- resources/views/auth/index.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .fade-enter {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .fade-enter-active {
            opacity: 1;
        }

        .fade-leave {
            opacity: 1;
            transition: opacity 0.5s ease-in-out;
        }

        .fade-leave-active {
            opacity: 0;
        }
    </style>
</head>

<body class="bg-gray-100">

    <div class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center text-blue-600 mb-10">Welcome to the House Construction Management
            System</h2>

        <div class="w-full max-w-md mx-auto bg-white p-8 shadow-lg rounded-lg relative">
            <!-- Form Container -->
            <div id="form-container">
                <!-- Login Form -->
                <div id="login-form" class="fade-enter-active">
                    <h3 class="text-xl font-semibold text-center text-blue-600 mb-6">Login</h3>
                    <form action="{{ url('/login') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                            <input type="email" name="email"
                                class="form-input mt-1 block w-full border border-gray-300 rounded-lg p-2" required>
                        </div>
                        <div class="mb-6">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                            <input type="password" name="password"
                                class="form-input mt-1 block w-full border border-gray-300 rounded-lg p-2" required>
                        </div>
                        <button type="submit"
                            class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-500 transition">Login</button>
                    </form>
                    <p class="text-sm text-center mt-4">Don't have an account? <a href="#"
                            class="text-blue-500 hover:text-blue-700" id="show-signup">Sign up</a></p>
                </div>

                <!-- Sign Up Form (Initially Hidden) -->
                <div id="signup-form" class="hidden fade-enter">
                    <h3 class="text-xl font-semibold text-center text-blue-600 mb-6">Sign Up</h3>
                    <form action="{{ url('/register') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                            <input type="text" name="name"
                                class="form-input mt-1 block w-full border border-gray-300 rounded-lg p-2" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                            <input type="email" name="email"
                                class="form-input mt-1 block w-full border border-gray-300 rounded-lg p-2" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                            <input type="password" name="password"
                                class="form-input mt-1 block w-full border border-gray-300 rounded-lg p-2" required>
                        </div>
                        <div class="mb-4">
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm
                                Password:</label>
                            <input type="password" name="password_confirmation"
                                class="form-input mt-1 block w-full border border-gray-300 rounded-lg p-2" required>
                        </div>
                        <div class="mb-6">
                            <label for="role" class="block text-sm font-medium text-gray-700">Role:</label>
                            <select name="role"
                                class="form-select mt-1 block w-full border border-gray-300 rounded-lg p-2" required>
                                <option value="homeowner">Homeowner</option>
                                <option value="engineer">Engineer</option>
                                <option value="company">Company</option>
                            </select>
                        </div>
                        <button type="submit"
                            class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-500 transition">Sign
                            Up</button>
                    </form>
                    <p class="text-sm text-center mt-4">Already have an account? <a href="#"
                            class="text-blue-500 hover:text-blue-700" id="show-login">Login</a></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        const loginForm = document.getElementById('login-form');
    const signupForm = document.getElementById('signup-form');
    const showSignupLink = document.getElementById('show-signup');
    const showLoginLink = document.getElementById('show-login');

    function toggleForms() {
        loginForm.classList.toggle('hidden');
        signupForm.classList.toggle('hidden');
        loginForm.classList.add('fade-enter-active');
        signupForm.classList.add('fade-enter-active');
    }

    showSignupLink.addEventListener('click', (e) => {
        e.preventDefault();
        toggleForms();
    });

    showLoginLink.addEventListener('click', (e) => {
        e.preventDefault();
        toggleForms();
    });
    </script>

</body>

</html>