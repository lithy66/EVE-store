<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\BrandRequest;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::child()->paginate(PAGINATION_COUNT);
        return view('dashboard.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        try {
            DB::beginTransaction();

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            $brand = Brand::create($request->all());
            $brand->name = $request->name;
            $brand->save();
            return redirect()->route('admin.brand')->with(['success' => __('messages.true')]);

            DB::commit();

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.brand')->with(['error' => __('messages.false')]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }


    public function edit($id)
    {
        $brand = Brand::orderBy('id')->find($id);
        if (!$brand)
            return redirect()->route('admin.brand')->with(['error' => __('messages.brand')]);
        return view('dashboard.brand.edit', compact('brand'));
    }


    public function update(BrandRequest $request, $id)
    {
        try {

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            $brand = Brand::find($id);
            if (!$brand)
                return redirect()->route('admin.brand')->with(['error' => __('messages.brand')]);
            $brand->update($request->all());
            $brand->name = $request->name;
            $brand->save();

            return redirect()->route('admin.brand')->with(['success' => __('messages.true')]);

        } catch (\Exception $ex) {
            return redirect()->route('admin.brand')->with(['error' => __('messages.brand')]);
        }
    }

    public function destroy($id)
    {
        $brand = Brand::orderBy('id')->find($id);
        if (!$brand)
            return redirect()->route('admin.brand')->with(['error' => __('messages.brand')]);

        $brand->translation()->delete();
        $brand->delete();

        return redirect()->route('admin.brand')->with(['success' => __('messages.true')]);
    }
}
