<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم - نظام التعليم العالي</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-6xl p-6">
    <header class="bg-blue-600 text-white p-4 flex justify-between items-center shadow-md">
        <img src="{{ asset('images/logo.png') }}" alt="شعار الوزارة" class="h-10 w-10 rounded-full"> <!-- ضع مسار الشعار الصحيح -->
        <span class="text-xl font-bold">نظام التعليم العالي</span>
        <div class="flex items-center gap-4">
            <span class="text-lg">مرحبا، المستخدم</span>
            <img src="{{ asset('images/logo.png') }}" alt="صورة المستخدم" class="w-10"> <!-- ضع مسار الصورة الصحيح -->
        </div>
    </header>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <h3 class="text-lg font-semibold">عدد الطلاب المقبولين</h3>
                <p class="text-2xl text-blue-600">1200</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <h3 class="text-lg font-semibold">عدد الجامعات المسجلة</h3>
                <p class="text-2xl text-blue-600">35</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <h3 class="text-lg font-semibold">أنواع القبول</h3>
                <p class="text-2xl text-blue-600">5</p>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
            <a href="{{ route('universities.index') }}" class="bg-green-500 text-white p-4 rounded-lg text-center font-semibold hover:bg-green-600">إدارة الجامعات</a>
            <a href="#" class="bg-yellow-500 text-white p-4 rounded-lg text-center font-semibold hover:bg-yellow-600">إدارة المستخدمين</a>
            <a href="#" class="bg-red-500 text-white p-4 rounded-lg text-center font-semibold hover:bg-red-600">إعدادات النظام</a>
        </div>
    </div>
</body>
</html>
