<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول - نظام التعليم العالي</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <div class="flex justify-center mb-4">
            <img src="{{ asset('images/logo.png') }}" alt="شعار الوزارة" class="w-24">
        </div>
        <h2 class="text-center text-2xl font-bold text-gray-700 mb-6">تسجيل الدخول</h2>
        
        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">البريد الإلكتروني</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">كلمة المرور</label>
                <input type="password" name="password" id="password" class="mt-1 block w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
            </div>
            <div class="flex justify-between items-center">
                <label class="flex items-center text-sm text-gray-600">
                    <input type="checkbox" name="remember" class="mr-2"> تذكرني
                </label>
                <a href="#" class="text-blue-500 text-sm">نسيت كلمة المرور؟</a>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">تسجيل الدخول</button>
        </form>
    </div>
</body>
</html>