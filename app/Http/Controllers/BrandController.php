<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view('dashboard.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $logo = $request->file('logo');
        if ($logo) {
            $logoName = time() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('uploads/brands'), $logoName);
        } else {
            $logoName = null;
        }

        Brand::create([
            'name' => $request->name,
            'logo' => $logoName,
        ]);

        return redirect()->route('dashboard.brand.index')->with('success', 'Brand created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $brand = Brand::findOrFail($id);
        return view('dashboard.brand.show', compact('brand'));    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('dashboard.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $brand = Brand::findOrFail($id);

        $logo = $request->file('logo');
        if ($logo) {
            $logoName = time() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('uploads/brands'), $logoName);
            if ($brand->logo) {
                unlink(public_path('uploads/brands/' . $brand->logo));
            }
        } else {
            $logoName = $brand->logo;
        }

        $brand->update([
            'name' => $request->name,
            'logo' => $logoName,
        ]);

        return redirect()->route('dashboard.brand.index')->with('success', 'Brand updated successfully.');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $brand = Brand::findOrFail($id);
        if ($brand->logo) {
            unlink(public_path('uploads/brands/' . $brand->logo));
        }
        $brand->delete();
        return redirect()->route('dashboard.brand.index')->with('success', 'Brand deleted successfully.');
    }
}
