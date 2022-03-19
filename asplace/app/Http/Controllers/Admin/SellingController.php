<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use App\Models\Selling;
use Illuminate\Http\Request;

class SellingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $selling = Selling::where('product_id', 'LIKE', "%$keyword%")
                ->orWhere('date_sale', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $selling = Selling::latest()->paginate($perPage);
        }

        return view('admin.selling.index', compact('selling'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.selling.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $requestData = $request->all();

        Selling::create($requestData);

        return redirect('admin/selling')->with('flash_message', 'Новая продажа добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $selling = Selling::findOrFail($id);

        /*
        $selling =
            DB::table('sellings')
            ->leftjoin('products', 'sellings.product_id', '=', 'products.id')
            ->where('sellings.id', '=', $id)
            ->get();
            */

        return view('admin.selling.show', compact('selling'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $selling = Selling::findOrFail($id);

        return view('admin.selling.edit', compact('selling'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $selling = Selling::findOrFail($id);
        $selling->update($requestData);

        return redirect('admin/selling')->with('flash_message', 'Продажа изменена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Selling::destroy($id);

        return redirect('admin/selling')->with('flash_message', 'Продажа удалена!');
    }
}
