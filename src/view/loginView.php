<?php include_once 'header.php'; ?>
<div class="flex items-center justify-center h-screen bg-gray-200">
    <div class="bg-white p-16 rounded shadow-2xl w-2/3">
        <h2 class="text-3xl font-bold mb-10 text-gray-800">Sign in to your account</h2>
        <form class="space-y-5" action="#" method="POST">
            <div>
                <label class="block mb-1 font-bold text-gray-500">Email address</label>
                <input type="email" name="email" id="email-address" autocomplete="email" required class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" placeholder="Email address">
            </div>
            <div>
                <label class="block mb-1 font-bold text-gray-500">Password</label>
                <input type="password" name="password" id="password" autocomplete="current-password" required class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" placeholder="Password">
            </div>
            <div class="flex items-center">
                <input type="checkbox" id="remember-me" name="remember-me" class="mr-2">
                <label for="remember-me" class="text-sm text-gray-800">Remember me</label>
            </div>
            <button type="submit" class="block w-full bg-purple-500 hover:bg-purple-400 p-4 rounded text-white font-bold">Sign in</button>
        </form>
        <a href="#" class="text-purple-500 hover:text-purple-600 text-sm">Forgot your password?</a>
        <a href="#" class="block text-center text-purple-500 hover:text-purple-600 text-sm mt-4">Don't have an account? Register Now</a>
    </div>
</div>
<?php include_once 'footer.php'; ?>
