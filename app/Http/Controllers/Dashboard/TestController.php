<?php

/*namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestRequest;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
/*    public function index()
    {
        $brands = Test::paginate(PAGINATION_COUNT);
        return view('dashboard.test.index', compact('brands'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  /*  public function create()
    {
        return view('dashboard.test.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(TestRequest $request)
    {

        try {

            DB::beginTransaction();

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            $brand = Test::create([
                'is_active' => $request->is_active,
                'name' => [
                    'en' => $request->name_en,
                    'ar' => $request->name_ar,
                ],
                'logo' => [
                    'en' => $request->logo_en,
                    'ar' => $request->logo_ar
                ]

            ]);

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
     * @param \App\Models\Test $brand
     * @return \Illuminate\Http\Response
     */
    /*public function show(Test $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Test $brand
     * @return \Illuminate\Http\Response
     */
    /*public function edit($id)
    {
        $brand = Test::orderBy('id', 'DESC')->find($id);
        if (!$brand)
            return redirect()->route('admin.brand')->with(['error' => __('messages.category')]);
        return view('dashboard.test.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Test $brand
     * @return \Illuminate\Http\Response
     */
    /*public function update(TestRequest $request, $id)
    {
        try {


            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            $brand = Test::find($id);

            if (!$brand)
                return redirect()->route('admin.brand')->with(['error' => __('messages.category')]);

            $brand->update($request->all());
            $brand->name = [
                'en' => $request->name_en,
                'ar' => $request->name_ar
            ];
            $brand->logo = [
                'en' => $request->logo_en,
                'ar' => $request->logo_ar
            ];
            $brand->save();

            return redirect()->route('admin.brand')->with(['success' => __('messages.true')]);
        } catch (\Exception $ex) {
            return redirect()->route('admin.brand')->with(['error' => __('messages.false')]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Test $brand
     * @return \Illuminate\Http\Response
     */
    /*public function destroy($id)
    {
        $brand = Test::orderBy('id', 'DESC')->find($id);
        if (!$brand)
            return redirect()->route('admin.brand')->with(['error' => __('messages.category')]);

        $brand->delete();
        return redirect()->route('admin.brand')->with(['success' => __('messages.true')]);
    }
}*/
