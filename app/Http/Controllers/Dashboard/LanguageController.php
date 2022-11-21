<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class LanguageController extends Controller {
    public function index() {
        $languages = array_filter(config('laravellocalization.supportedLocales'), function($value, $key) {
            return $value['status'] == 1;
        }, ARRAY_FILTER_USE_BOTH);
        return view('dashboard.admin.languages.index', compact('languages'));
    }
}
