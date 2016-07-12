<?php

class PostController extends \BaseController {

	public function createPost(){

		$validation = Validator::make(Input::all(),[
			'content' =>' required', 
		]);

		if($validation->fails()){
            $messages = $validation->messages();
            Session::flash('validation_messages', $messages);
            return Redirect::back()->withInput();
        }

        $user = Auth::user();

        try{
        	$photo = Input::file('photo');
        	
        	if($photo->isValid()){
        		$destination = __DIR__.'/public/'.$photo->getClientOriginalName();

        		$photo->move($destination);

        	}

        	$post = Post::create([
        		'content' => Input::get('content'),
        		'UID'	=> $user->id,
        		'fname'	=> $user->name,
        		'profile_pic'	=> $user->profile_pic
        	]);

        	PostPictures::create([
        		'PID'	=> $post->id,
        		'photo'	=> $destination
        	]);

        }catch(Exception $e){
        	Session:flash('error_message', 
        	'Oops! Something is wrong');
        	return Redirect::back()->withInput();
        }

        return Redirect::to('/feed');

	}


}
