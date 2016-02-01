<?php 

namespace App\Http\Controllers;

use DB;
use Crypt;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function showId($id)
	{
		return "hello, ". $id;
	}

	public function sayHello($name = 'laravel')
	{
		return view('test', ['name' => $name]);
	}

	public function signUp(Request $req){

		$name = $req->input('name');
		$passwd = $req->input('passwd');
		$repasswd = $req->input('repasswd');
		$email = $req->input('email');

		if($passwd != $repasswd){
			return redirect()->back();
		}else{
			$passwd = Crypt::encrypt($passwd);
			DB::insert('insert into user (id, username, password, email) values (?, ?, ?, ?)', [1, $name, $passwd, $email]);
			return view('test',['name' => $name]);
		}
		

	}
}


 ?>