<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
//     public function search(Request $request) {
// 		// Get the search value from the request
//         $search = $request->input('search');

//         // Search in the title and body columns from the posts table
//         $pengumuman = Pengumuman::query()
//             ->where('judul', 'LIKE', "%{$search}%")
//             ->orWhere('subjudul', 'LIKE', "%{$search}%")
//             ->orWhere('deskripsi', 'LIKE', "%{$search}%")
//             ->get();
    
//         // Return the search view with the resluts compacted
//         return view('pengumuman', compact('pengumuman'));
// }
}
