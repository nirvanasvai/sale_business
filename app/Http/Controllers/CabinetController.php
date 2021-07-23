<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Favorite;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CabinetController extends Controller
{
    public function cabinet()
    {
        if (auth()->check()){
            $user = User::query()->where('id',auth()->user()->id)->first();
            $catalogs = Catalog::query()->where('user_id',auth()->user()->id)->where('is_approved',1)->get();
            $inModer = Catalog::query()->where('user_id',auth()->user()->id)->where('is_approved',0)->get();
            $archive = Catalog::query()->where('user_id',auth()->user()->id)->where('archive',1)->get();
            $favoritesView = Catalog::query()->get();

            return view('pages.cabinet.cabinet',compact('user','catalogs','favoritesView','inModer','archive'));
        }else {
             abort(404);
        }

    }

    public function editUser(Request $request,$city,$id)
    {
        $request->validate([

        ]);

        $user = User::query()->find(auth()->user()->id);
        $user->firstname = $request->get('firstname');
        $user->lastname = $request->get('lastname');
        $user->phone = $request->get('phone');
        $user->date_birth = $request->get('date_birth');
        $user->gender = $request->get('gender');
        $user->email = $request->get('email');

        $user->update();
        return back()->with('success','Успешно Обновлено!!');
    }

    public function editPassword(Request $request,$city)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

//        dd('Password change successfully.');
        return back()->with('success','Успешно Обновлено!!');
    }

    public function favorite()
    {
        return view('components.message');
    }
}
