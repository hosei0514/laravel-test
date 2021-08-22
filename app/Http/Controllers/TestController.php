<?php
namespace App\Http\Controllers;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TestController extends Controller
{
public function index()
{
$items = Inquiry::all();
return view('index', ['items' => $items]);
}
public function find()
{
return view('find', ['input' => '']);
}
public function search(Request $request)
{
$item = Inquiry::where('name', 'LIKE',"%{$request->input}%")->first();
$param = [
'input' => $request->input,
'item' => $item
];
return view('find', $param);
}
public function bind(Inquiry $inquiry)
{
$data = [ 'item'=>$inquiry, ];
return view('inquiry.binds', $data);
}
public function add()
{
return view('add'); } public function create(Request $request)
{
$this->validate($request, Inquiry::$rules);
$form = $request->all();
Inquiry::create($form);
return redirect('/');
}
public function check(Request $request)
{
$text = ['text' => 'ログインして下さい。'];
return view('auth', $text);
}
public function checkUser(Request $request)
{
$email = $request->email;
$password = $request->password;
if (Inquiry::attempt(['email' => $email,
'password' => $password])) {
$text = Inquiry::user()->name . 'さん、お問い合わせありがとうございます。';
} else {
$text = 'ログインに失敗しました';
}
return view('auth', ['text' => $text]);
}

}
