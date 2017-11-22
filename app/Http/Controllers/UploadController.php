<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use View;

class UploadController extends Controller {

	public function upload(Request $request) {
		$this->validate($request, [
            'name' => 'required',
            'uid' => 'integer|required',
            'ingradient' => 'required',
            'howto' => 'required',
	    	'image' => 'mimes:jpeg,bmp,png', //only allow this type extension file.
        ]);
        $file = $request->file('image');
        $lastorder = DB::table('food')->orderBy('fid','desc')->first()->fid + 1;
        DB::table('food')->insert([
            [   
                'fid' => $lastorder,
                'name' => $request->name,
                'ingradient' => $request->ingradient,
                'howto' => $request->howto,
                'uid' => $request->uid,
                'views' => 0
            ]
        ]);
		// image upload in public/upload folder.
		$file->move('img', ($lastorder).'.jpg'); 
        return redirect('/');
	}
}