<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الجامعات - نظام التعليم العالي</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <header class="bg-blue-600 text-white p-4 flex justify-between items-center shadow-md">
        <img src="{{ asset('images/logo.png') }}" alt="شعار الوزارة" class="h-10 w-10 rounded-full"> <!-- ضع مسار الشعار الصحيح -->
        <span class="text-xl font-bold">نظام التعليم العالي</span>
        <div class="flex items-center gap-4">
            <span class="text-lg">مرحبا، المستخدم</span>
            <img src="{{ asset('images/logo.png') }}" alt="صورة المستخدم" class="w-10"> <!-- ضع مسار الصورة الصحيح -->
        </div>
    </header>
    
    @extends('layouts.admin')

@section('content')
<div class="container">
    <h2>إدارة الجامعات</h2>
    <a href="{{ route('admin.universities.create') }}" class="btn btn-primary">إضافة جامعة جديدة</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>الاسم</th>
                <th>الكود</th>
                <th>الموقع</th>
                <th>الرخصة</th>
                <th>تنتهي في</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($universities as $university)
            <tr>
                <td>{{ $university->name }}</td>
                <td>{{ $university->code }}</td>
                <td>{{ $university->location ?? 'غير متوفر' }}</td>
                <td>{{ $university->license->license_key ?? 'لم يتم التفعيل' }}</td>
                <td>{{ $university->license->expires_at ?? 'غير متوفر' }}</td>
                <td>
                    <a href="{{ route('admin.universities.edit', $university->id) }}" class="btn btn-warning">تعديل</a>
                    <form action="{{ route('admin.universities.destroy', $university->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">حذف</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $universities->links() }}
</div>
@endsection

    
</body>
</html>
