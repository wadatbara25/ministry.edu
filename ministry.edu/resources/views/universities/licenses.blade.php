@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="mb-4">إدارة الرخص</h2>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>الجامعة</th>
                <th>كود الرخصة</th>
                <th>تاريخ الانتهاء</th>
                <th>الحالة</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($licenses as $license)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $license->university->name }}</td>
                    <td>{{ $license->license_key }}</td>
                    <td>{{ $license->expires_at }}</td>
                    <td>
                        @if($license->status == 'active')
                            <span class="badge badge-success">فعالة</span>
                        @elseif($license->status == 'expired')
                            <span class="badge badge-danger">منتهية</span>
                        @else
                            <span class="badge badge-warning">موقوفة</span>
                        @endif
                    </td>
                    <td>
                        @if($license->status == 'expired')
                            <form action="{{ route('admin.licenses.renew', $license->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm">تجديد</button>
                            </form>
                        @endif
                        
                        @if($license->status == 'suspended')
                            <form action="{{ route('admin.licenses.activate', $license->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm">تفعيل</button>
                            </form>
                        @elseif($license->status == 'active')
                            <form action="{{ route('admin.licenses.suspend', $license->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-warning btn-sm">إيقاف</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $licenses->links() }}
</div>
@endsection
