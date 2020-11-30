<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserDetail;

class UserController extends Controller
{
	function index(){
		$data['list_user'] = User::all();
		return view('admin.user.index', $data);
	}

	function create(){
		return view('admin.user.create');
	}

	function store(){
		$user = new User;
		$user->username = request('username');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		$user->save();

		return redirect('admin/user')->with('success','Data Berhasil Ditambahkan');
	}

	function show(User $user){
		$data['user'] = $user;
		return view('admin.user.show', $data);
	}

	function edit(User $user){
		$data['user'] = $user;
		return view('admin.user.edit', $data);
	}

	function update(User $user){
		$user->username = request('username');
		$user->email = request('email');
		if(request('password')) $user->password = bcrypt(request('password'));
		$user->save();

		return redirect('admin/user')->with('success','Data Berhasil Diubah');
	}

	function destroy(user $user){
		$user->delete();
		return redirect('admin/user')->with('danger','Data Berhasil Dihapus');
	}
}