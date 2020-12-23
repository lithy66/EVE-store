<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;

class SubCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = Category::child()->orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        // return view('dashboard.subCategories.index', compact('categories'));

        $categories = Category::child()->orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        return view('dashboard.subCategories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::parent()->orderBy('id', 'DESC')->get();
        return view('dashboard.subCategories.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubCategoryRequest $request)
    {
        try {

            DB::beginTransaction();

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            $category = Category::create($request->except('_token'));
            $category->name = $request->name;
            $category;
            $category->save();

            return redirect()->route('admin.subCategories')->with(['success' => __('messages.true')]);
            DB::commit();

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.subCategories')->with(['error' => __('messages.false')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $category = Category::orderBy('id', 'DESC')->find($id);
        if (!$category)
            return redirect()->route('admin.subCategories')->with(['error' => __('messages.false')]);

        $categories = Category::parent()->orderBy('id', 'DESC')->get();
        return view('dashboard.subcategories.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubCategoryRequest $request, $id)
    {
        try {
            $category = Category::find($id);
            if (!$category)
                return redirect()->route('admin.subCategories')->with(['error' => __('messages.category')]);

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);


            $category->update($request->all());
            $category->name = $request->name;
            $category->save();

            return redirect()->route('admin.subCategories')->with(['success' => __('messages.true')]);
        } catch (\Exception $ex) {
            return redirect()->route('admin.subCategories')->with(['error' => __('messages.false')]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::orderBy('id', 'DESC')->find($id);
        if (!$category)
            return redirect()->route('admin.subCategories')->with(['error' => __('messages.category')]);


        $category->delete();
        $category->translations()->delete();


        return redirect()->route('admin.subCategories')->with(['success' => __('messages.true')]);
    }
}
