<?php 

namespace App\Http\Controllers;

use DB;
use Crypt;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function get_signUp(){
		return view('reg',[
			'title' => '注册',
			'message' => session('message')
			]);

	}

	public function post_signUp(Request $req){

		$name = $req->input('name');
		$passwd = $req->input('passwd');
		$repasswd = $req->input('repasswd');
		$email = $req->input('email');

		if($passwd != $repasswd){
			return redirect()->back()->withInput()->with('message','两次输入的密码不一致！');
		}else{
			if(!DB::select('select * from user where active = ?', [$name])){
				$passwd = Crypt::encrypt($passwd);
				DB::insert('insert into user (id, username, password, email) values (?, ?, ?, ?)', [1, $name, $passwd, $email]);
				return view('test',['name' => $name]);
			}else{
				return redirect()->back()->withInput()->with('message','该用户已存在！');
			}
		}
	}

	// public function login(Request $req){
	// 	$name = $req->input('name');

	// }
}


?>