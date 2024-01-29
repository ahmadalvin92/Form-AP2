<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class YourPdfController extends Controller
{
    // Metode-metode lain di sini...

    public function generatePdf()
    {
        $posts = Post::all(); // Gantilah sesuai model dan data yang sesuai dengan proyek Anda

        $pdf = PDF::loadHTML(View::make('pdf.template', ['posts' => $posts]));
        $pdfPath = public_path('generated-pdf/' . uniqid() . '.pdf');
        $pdf->save($pdfPath);

        return response()->json(['url' => $pdfPath]);
    }
}
