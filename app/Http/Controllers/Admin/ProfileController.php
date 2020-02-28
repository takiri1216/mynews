<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profile;
use App\History;
use Carbon\Carbon;

class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }
    public function create(Request $request)
    {
         // Varidationを行う
        $this->validate($request, Profile::$rules);
        $profile = new Profile;
        $form = $request->all();
        
        //データベースに保存する
        $profile->fill($form);
        $profile->save();
        // admin/news/createにリダイレクトする
        return redirect('admin/profile/create');
    }

    public function edit(Request $request)
    {
        
        $histories = History::where('news_id', 0)->get();
        $profile = Profile::find($request->id);
        if (empty($profile)) {
            abort(404);    
      }
        return view('admin.profile.edit', ['profile_form' => $profile,'histories' => $histories]);
    }
    public function update(Request $request)
    {
        
        $this->validate($request, Profile::$rules);
        $profile = new Profile;
        $form = $request->all();
        
        //データベースに保存する
        $profile->fill($form);
        $profile->save();
        
        $history = new History;
        $history->profile_id = $profile->id;
        $history->news_id = 0;
        $history->edited_at = Carbon::now();
        $history->save();
        
        return view('admin/profile/success');
    }
    
    public function profile()
    {
        return view('admin.profile.profile');
    }
}