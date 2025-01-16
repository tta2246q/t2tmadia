<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Block;
use App\Models\Landingpages;
use App\Models\Languages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlockLandingController extends Controller
{
    public function index($landingpage_id, $language_id)
    {
        $block = Block::where('landingpage_id', $landingpage_id)
            ->where('language_id', $language_id)
            ->firstOrFail();
      
        $landingPage = Landingpages::findOrFail($landingpage_id);
        $language = Languages::findOrFail($language_id);
        $languages = Languages::all();
        return view('admin.block.index', compact('block', 'landingPage', 'language', 'language_id', 'languages'));
    }
    
}
