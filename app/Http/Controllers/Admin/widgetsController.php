<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Principle;

class widgetsController extends Controller
{
    public function principles()
    {
        return view('admin.pages.principles');
    }

    public function store_principle(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'heading' => 'required|string|max:65535',
            'desc' => 'required|string|max:4294967295',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()]);
        }

        try {
            // $user = auth()->user();
            $message  = NULL;
            Session::forget('msg');
            $saved = Principle::updateOrCreate(
                ['id' => $request->id ?? NULL],
                [
                    'title' => strtoupper($request->title),
                    'heading' => strtoupper($request->heading),
                    'desc' => $request->desc,
                    'created_by' => Auth::id(),
                ]
            );
            $message = "Principle " . ($request->id ? "Updated" : "Saved") . " Successfully";
            Session::flash('msg', $message);
            return view('admin.pages.principles');
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error storing Transection', 'error' => $e->getMessage()], 500);
        }
    }
}
