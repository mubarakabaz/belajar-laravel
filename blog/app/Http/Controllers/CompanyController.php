<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function view(){
        return view('company.view');
    }

    public function getCompanyData(Request $request){
        $companies = Company::latest()->paginates(5);

        return Request::ajax() ?
            response()->json($companies, Response::HTTP_OK) :
            abort(404);
    }

    public function store(Request $request){
        Company::updateOnCreate(
            [
                'id' => $request->id,
            ],
            [
                'name'      =>$request->name,
                'email'     => $request->email,
                'phone'     => $request->phone,
                'address'   => $request->address,
            ]);
        
            return response()->json([
                'message' => 'Data anda berhasil dimasukkan',
            ],);
    }

    public function update($id){
        $company = Company::find($id);

        return response()->json([
            'data' => $company,
        ],);
    }

    public function destroy($id){
        
        Company::destroy($id);

        return response()->json([
            'message' => 'Data anda berhasil dihapus',
        ],);
    }

}
