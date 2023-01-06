<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class newsController extends Controller
{
    public function index()
    {
        $title = "Manage News";
        $news = News::all();
        return view('admin.news.list', compact('title', 'news'));


    }

    public function get($id = null)
    {
        if ($id > 0) {
            $title = "Edit News";
            $news = News::find($id);
            return view('admin.news.form', compact('title', 'news'));
        }
        $title = "Create News";
        return view('admin.news.form', compact('title'));
    }


    public function save()
    {
        $data = $this->validate(\request(), [
            'title' => 'required',
            'content' => 'required',
        ]);


        $id = \request('id');


        if ($id > 0) {

            if (!empty(request()->file('image'))) {
                $oldImage = News::find($id);
                $imageName = uploadFile("update", 'image', 'uploads' . DS . 'news' . DS, $oldImage->image);
                $data['image'] = 'uploads/news/' . $imageName['image'];
            }

            News::find($id)->update($data);
            alert('Update', 'Information Save Successful', 'success');
            return redirect('admin/news');
        }


        if (!empty(request()->file('image'))) {
            $imageName = uploadFile('create', 'image', 'uploads' . DS . 'news' . DS, null);
            $data['image'] = 'uploads/news/' . $imageName['image'];
        }



        News::create($data);
        alert('Create', 'Information Save Successful', 'success');
        return redirect('admin/news');
    }


    public function delete($id)
    {
        News::find($id)->delete();
        alert('Delete', 'Information Delete Successful', 'success');
        return back();

    }

}
