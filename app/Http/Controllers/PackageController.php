<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

class PackageController extends Controller
{
    public function index()
    {
        $packages=Package::all();
        return view('pages.package',compact('packages'));
    }
    public function create()
    {
        return view('admin.createPackage');
    }
    public function store(Request $request)
    {
        $packageDetails=$request->all();
        Package::create($packageDetails);
        return redirect('/addPackage')->withMessage('Package Created Successfully');
    }
    public function deleteIndex()
    {
        $deletePackage=Package::all();
        return view('admin.deletePackage',compact('deletePackage'));
    }
    public function delete($package_id)
    {
        $package =Package::where('id',$package_id)->first()->delete();
        return redirect('/deletePackage')->withMessage('Package Deleted Succesfully');
    }
}
