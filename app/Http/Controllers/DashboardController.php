<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Block;
use App\Models\Landingpage;
use App\Models\Language;
class DashboardController extends Controller
{
    public function index($landingpage_id, $language_id)
    {
        // $block = Block::with('landingPage')->findOrFail($id);
        // Fetch the block for the given landingpage_id and language_id
        $block = Block::where('landingpage_id', $landingpage_id)
            ->where('language_id', $language_id)
            ->firstOrFail();
      
        // Fetch related data if necessary
        $landingPage = Landingpage::findOrFail($landingpage_id);
        $language = Language::findOrFail($language_id);
        $languages = Language::all();
        return view('admin.block.index', compact('block', 'webConfig', 'landingPage', 'language', 'language_id', 'languages'));
    }
}