<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurEventCalenderModel;
use Illuminate\Support\Facades\DB;
class FilterController extends Controller
{
    public function filterKeywords(Request $request){
        $query = OurEventCalenderModel::query();
        
        if (isset($request->title)) {
            $title = '%' . trim($request->title) . '%';
            $query->where(function($q) use ($title) {
                $q->whereRaw('LOWER(title) LIKE ?', [strtolower($title)])
                  ->orWhereRaw('LOWER(description) LIKE ?', [strtolower($title)]);
            });
        }
        
        if (isset($request->date)) {
            $query->where('event_date', $request->date);
        }
        
        $results = $query->get();
        
        $html = view('web.ajax_load.event_filter', compact('results'))->render();
        return response()->json(['data' => $html]);
    }
}
