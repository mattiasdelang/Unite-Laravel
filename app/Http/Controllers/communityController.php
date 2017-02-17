<?php

namespace App\Http\Controllers;

use App\Community;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class communityController extends Controller
{
    public function getChoose()
    {

        if (!Auth::check()) {
            return redirect('/login')->withErrors(['Je moet aangemeld zijn.']);
        }

        $result = Community::checkComm();

        if($result !== 'false')
            return redirect('/index');

        $user = Auth::user();
        $communities = \DB::table('communities')
            ->join('users','users.id','=','communities.userId')
            ->where('users.postcode', $user->postcode)
            ->select('communities.id','communities.name','communities.created_at','users.firstname','users.lastname')
            ->get();

        return view('users.choose',compact('communities'));

    }
    public function postChoose()
    {

        $commid = Input::get("communities");
        $user = Auth::user();

        User::where('id',$user->id)->update(['commId' => $commid]);


        return redirect('/index')->with('message','Welkom in je nieuwe community.');

    }

    public function getComm()
    {

        if (!Auth::check()) {
            return redirect('/login')->withErrors(['Je moet aangemeld zijn.']);
        }

        $result = Community::checkComm();

        if($result !== 'false')
            return redirect('/index');


        return view('community.newcomm');
    }

    public function postComm()
    {

        $name = Input::get("name");
        $user = Auth::user();

        $comm = Community::create(['name'=>$name,'userId'=>$user->id]);

        $id = $comm->id;
        User::where('id',$user->id)->update(['commId' => $id]);

        return redirect('/index')->with('message','Community is succesvol aangemaakt, welkom.');


    }
}
