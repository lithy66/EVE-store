<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\MinCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;

class MainCategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::parent()->paginate(PAGINATION_COUNT);
        return view('dashboard.categories.index', compact('categories'));
    }

    public function create()
    {

        return view('dashboard.categories.create');
    }

    public function store(MinCategoryRequest $request)
    {

        try {

            DB::beginTransaction();

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            $category = Category::create($request->all());

            $category->name = $request->name;
            $category->save();

            return redirect()->route('admin.mainCategories')->with(['success' => __('messages.true')]);
            DB::commit();

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.mainCategories')->with(['error' => __('messages.false')]);
        }


    }


    public function edit($id)
    {

        $category = Category::orderBy('id', 'DESC')->find($id);
        if (!$category)
            return redirect()->route('admin.mainCategories')->with(['error' => __('messages.category')]);
        return view('dashboard.categories.edit', compact('category'));
    }

    public function update($id, MinCategoryRequest $request)
    {

        try {

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            $category = Category::find($id);
            if (!$category)

                return redirect()->route('admin.mainCategories')->with(['error' => __('messages.category')]);
            $category->update($request->all());
            $category->name = $request->name;
            $category->save();

            return redirect()->route('admin.mainCategories')->with(['success' => __('messages.true')]);
        } catch (\Exception $ex) {
            return redirect()->route('admin.mainCategories')->with(['error' => __('messages.false')]);
        }
    }

    public function destroy($id)
    {

        $category = Category::orderBy('id', 'DESC')->find($id);
        if (!$category)
            return redirect()->route('admin.mainCategories')->with(['error' => __('messages.category')]);

        foreach ($category->mainChild()->get() as $cat) {
            $cat->translations()->delete();
            $cat->delete();
        }

        $category->translations()->delete();
        $category->delete();

        return redirect()->route('admin.mainCategories')->with(['success' => __('messages.true')]);
    }


}
