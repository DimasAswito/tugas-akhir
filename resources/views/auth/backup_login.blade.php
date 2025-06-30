<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        secondary: {
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .input-focus:focus-within {
            box-shadow: 0 0 0 2px rgba(14, 165, 233, 0.5);
            border-color: #0ea5e9;
        }
        .google-btn:hover {
            box-shadow: 0 1px 3px 0 rgba(66, 133, 244, 0.3), 0 1px 2px 0 rgba(66, 133, 244, 0.2);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-xl shadow-sm p-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">Welcome back</h1>
                <p class="text-gray-500">Sign in to your account</p>
            </div>

            <form id="loginForm" class="space-y-6">
                <div class="space-y-4">
                    <div class="input-focus border border-gray-200 rounded-lg px-4 py-3 focus-within:border-secondary-400 transition-all">
                        <label for="email" class="block text-xs font-medium text-gray-500 mb-1">Email</label>
                        <input 
                            type="email" 
                            id="email" 
                            placeholder="Enter your email" 
                            class="w-full outline-none text-gray-700 placeholder-gray-400"
                            required
                        >
                    </div>

                    <div class="input-focus border border-gray-200 rounded-lg px-4 py-3 focus-within:border-secondary-400 transition-all">
                        <div class="flex justify-between items-center">
                            <label for="password" class="block text-xs font-medium text-gray-500 mb-1">Password</label>
                            <a href="#" class="text-xs text-secondary-600 hover:text-secondary-700 font-medium">Forgot?</a>
                        </div>
                        <input 
                            type="password" 
                            id="password" 
                            placeholder="Enter your password" 
                            class="w-full outline-none text-gray-700 placeholder-gray-400"
                            required
                        >
                    </div>
                </div>

                <button type="submit" class="w-full bg-secondary-500 hover:bg-secondary-600 text-white py-3 px-4 rounded-lg font-medium transition-colors">
                    Sign in
                </button>
            </form>

            <div class="flex items-center my-6">
                <div class="flex-grow border-t border-gray-200"></div>
                <span class="mx-4 text-gray-400 text-sm">OR</span>
                <div class="flex-grow border-t border-gray-200"></div>
            </div>

            <button class="google-btn w-full flex items-center justify-center gap-3 border border-gray-200 rounded-lg py-3 px-4 text-gray-700 font-medium hover:border-gray-300 transition-all">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" alt="Google logo" class="w-5 h-5">
                Continue with Google
            </button>

            <div class="mt-6 text-center text-sm text-gray-500">
                Don't have an account? 
                <a href="#" class="text-secondary-600 hover:text-secondary-700 font-medium">Sign up</a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            // Here you would typically handle the login logic
            console.log('Login attempt with:', { email, password });
            
            // Simulate successful login
            // alert('Login successful!');
        });

        // Google login handler
        document.querySelector('.google-btn').addEventListener('click', function() {
            // Here you would implement Google OAuth
            console.log('Google login clicked');
            // alert('Redirecting to Google login...');
        });
    </script>
</body>
</html>