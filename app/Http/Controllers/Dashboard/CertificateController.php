<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CertificatesImport;

class CertificateController extends Controller
{
    public function index(){
    $certificates = Certificate::all();
        return view('dashboards.certificates.index',compact('certificates'));
    }
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls'
        ]);

        Excel::import(new CertificatesImport, $request->file('file'));

        return back()->with('success', 'Certificates imported successfully.');
    }
    public function searchByCertificateNo(Request $request)
    {
        $certificateNo = $request->input('certificate_no');
        $certificate = Certificate::where('certificate_No', $certificateNo)->first();

        if ($certificate) {
            return response()->json([
                'success' => true,
                'data' => $certificate
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Certificate not found.'
            ]);
        }
    }
}
