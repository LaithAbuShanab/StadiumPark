<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Hour;
use App\Models\News;
use App\Models\Post;
use App\Models\Stadium;
use App\Models\User;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home(){
        $title="Stadiums";
        $stadiums=Stadium::all();
        return view('user.pages.home',compact('title','stadiums'));
    }


    public function news(){
        $title="News";
        $news=News::all();
        return view('user.pages.news',compact('title','news'));
    }

    public function stadium_details($id){
        $title="Stadium Details";
        $stadium=Stadium::find($id);
        return view('user.pages.stadium_details',compact('title','stadium'));
    }


    public function profile(){
        $title="My Profile";
        return view('user.pages.profile',compact('title'));
    }


    public function updateProfile(){

        $data=$this->validate(\request(),[
           'name'=>'required',
           'mobile'=>'required',
        ]);
        if (!empty(\request('password'))) {
            $data['password']=bcrypt(\request('password'));
        }

        if (!empty(request()->file('image'))) {
            $imageName = uploadFile("update", 'image', 'uploads' . DS . 'users' . DS, auth()->user()->image);
            $data['image'] = 'uploads/users/'. $imageName['image'];
        }
        User::find(auth()->user()->id)->update($data);
        alert('success','Your Information Update Successful','success');

        return back();

    }


    public function myAppointment(){
        $title= "My Appointment";
        $hour=Hour::first();
        $appointments=Appointment::where('user_id',auth()->user()->id)
            ->with(['stadium'])
            ->get();
        return view('user.pages.myAppointment',compact('title','appointments','hour'));
    }



    public function myPost(){
        $title="My Post";
        $posts=Post::where('user_id',auth()->user()->id)->get();
        return view('user.pages.myPosts',compact('title','posts'));
    }




    public function delete_post($id){
        Post::find($id)->delete();
        alert('success','post deleted successful','success');
        return back();

    }





    public function savePost(){
        $data=[];

        if (empty(\request('details')) && empty(\request('image')) && empty(\request('video'))){
            alert('Error',"can't add empty post...!",'error');
            return  back();
        }

        if (\request()->has('details') &&  !empty(\request('details'))){
            $data['details']=\request('details');
        }

        if (!empty(request()->file('image'))) {
            $imageName = uploadFile('create', 'image', 'uploads' . DS . 'posts'. DS.'image'.DS, null);
            $data['image']= 'uploads/posts/image/'. $imageName['image'];
        }

        if (!empty(request()->file('video'))) {
            $imageName = uploadFile('create', 'video', 'uploads' . DS . 'posts'. DS.'video'.DS, null);
            $data['video']= 'uploads/posts/video/'. $imageName['image'];
        }

        $data['user_id']=auth()->user()->id;
        Post::create($data);

        alert('Success','Your post is published successful','success');
        return back();
    }




    public function posts(){
        $title="User Posts";
        $posts=Post::all();
        return view('user.pages.posts',compact('title','posts'));
    }



    public function filter(){
        $id =\request('id');
        $city =\request('city');
        $type =\request('type');

        if (!empty($id)){
            $data=Stadium::where('id',$id)->get();
            return response()->json($data);
        }

        $data=[];

        if (!empty($city)){
            $data=Stadium::where(function($q) use($city) {
                $q->where('address', 'LIKE', "%{$city}%")
                    ->orWhere('details','LIKE', "%{$city}%");
            });
        }

        if (!empty($type)){
            $data->where('type',$type);
        }

        $data=$data->get();
        return response()->json($data);

    }





}
