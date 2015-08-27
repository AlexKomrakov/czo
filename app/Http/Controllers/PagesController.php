<?php
/**
 * Created by PhpStorm.
 * User: shark
 * Date: 22.07.15
 * Time: 13:59
 */

namespace App\Http\Controllers;


use App\Page;
use Illuminate\Http\Request;
use Input;
use Redirect;

class PagesController extends Controller {

    public function index()
    {
        $pages = Page::all();

        return view('pages.index', compact('pages'));
    }

    public function show(Page $page)
    {
        return view('pages.show', compact('page'));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);
        Page::create($request->all());
        $request->flash();

        return redirect("/admin/pages");
    }

    public function edit(Page $page)
    {
        return view('pages.edit', compact('page'));
    }

    public function update(Page $page)
    {
        $page->update(Input::all());

        return redirect("/admin/pages");
    }

    public function delete(Page $page)
    {
        $page->delete();

        return Redirect::back();
    }

}