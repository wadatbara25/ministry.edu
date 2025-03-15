<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\University;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class UniversityController extends Controller
{
    // جلب قائمة الجامعات (محمي بـ Sanctum)
    public function index(Request $request)
    {
        $universities = University::select('id', 'name', 'location')->get();
        return response()->json($universities, 200);
    }

    // جلب قائمة الطلاب في جامعة معينة (محمي بـ Sanctum)
    public function students(Request $request, $university_id)
    {
        // التأكد من أن الجامعة موجودة
        $university = University::find($university_id);
        if (!$university) {
            return response()->json(['error' => 'الجامعة غير موجودة'], 404);
        }

        // جلب الطلاب مع الحقول المطلوبة فقط
        $students = Student::where('University_id', $university_id)
            ->select('id', 'n1', 'n2', 'n3', 'n4', 'college', 'depetname', 'addyear')
            ->get();

        return response()->json($students, 200);
    }

    // إضافة جامعة جديدة (محمي بـ Sanctum)
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $university = University::create([
            'name' => $request->name,
            'location' => $request->location,
        ]);

        return response()->json(['message' => 'تمت إضافة الجامعة بنجاح', 'university' => $university], 201);
    }

    // تعديل بيانات جامعة
    public function update(Request $request, $id)
    {
        $university = University::find($id);
        if (!$university) {
            return response()->json(['error' => 'الجامعة غير موجودة'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'location' => 'sometimes|required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $university->update($request->only(['name', 'location']));

        return response()->json(['message' => 'تم تحديث بيانات الجامعة بنجاح'], 200);
    }

    // حذف جامعة
    public function destroy($id)
    {
        $university = University::find($id);
        if (!$university) {
            return response()->json(['error' => 'الجامعة غير موجودة'], 404);
        }

        $university->delete();
        return response()->json(['message' => 'تم حذف الجامعة بنجاح'], 200);
    }
}
