<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Mail;
use Session;

use App\Http\Requests;

use App\Post;

class PagesController extends  Controller{

    public function getIndex(){
        $posts = Post::orderBy('created_at', 'desc')->limit(3)->get();
        return view('index')->withPosts($posts);
    }

    public function getAgri(){
        return view('pages.agri_food');
    }

    public function getBD(){
        return view('pages.bd_approch');
    }

    public function getBHealth(){
        return view('pages.business-health-check');
    }

    public function getFashion(){
        return view('pages.fashion');
    }

    public function getMedia(){
        return view('pages.media-entertainment');
    }

    public function getOthers(){
        return view('pages.others');
    }

    public function getOverview(){
        return view('pages.overview');
    }

    public function getPhilosophy(){
        return view('pages.philosophy');
    }

    public function getTeam(){
        return view('pages.team');
    }

    public function getTourisam(){
        return view('pages.tourisam_leisure');
    }

    public function getTransport(){
        return view('pages.transport_logistics');
    }

    public function getWhatweDo(){
        return view('pages.what-we-do');
    }

    public function getWhoWeWork(){
        return view('pages.who-we-work-with');
    }

    public function getBlogs(){
        $posts = Post::orderBy('created_at', 'desc')->limit(3)->get();
        return view('posts.home')->withPosts($posts);
    }

    public function getContact(){
        return view('pages.contact');
    }

    public function getAbout(){
        return view('pages.about');
    }


    public function postContact(Request $request){
        $this->validate($request, [
            'email' => 'required | email',
            'subject' => 'min:3',
            'message' => 'min:10'

        ]);

        $data =    array(
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        );

        Mail::send('emails.contact', $data, function ($message) use($data){
            $message->from($data['email']);
            $message->to('sk2read@gmail.com');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Your Email Was Sent We Will Contact You Soon');

        return redirect()->url('/');
    }

    public function getSitemap(){
        return view('pages.sitemap');
    }
}