<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class ValidationController extends Controller {

    
    /**
     * Store a new blog post.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
       
        if (!empty($request->btnAccepted)) {
            $rules = array(
                'checkbox' => 'accepted'
            );
            $messages = array(
                'accepted' => 'The :attribute is not checked'
            );
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                $request->session()->flash('checkbox', array('class' => 'danger',
                    'message' => 'accepted Validation rule has been failed'));
            } else {
                $request->session()->flash('checkbox', array('class' => 'success',
                    'message' => 'accepted Validation rule has been passed'));
            }
        } else if (!empty($request->btnActiveURL)) {
            $rules = array(
                'URL' => 'required|active_url'
            );
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $request->session()->flash('URL', array('class' => 'danger',
                    'message' => 'The URL is not a valid URL'));
            } else {
                $request->session()->flash('URL', array('class' => 'success',
                    'message' => 'active_url Validation rule has been passed by given URL'));
            }
        } else if (!empty($request->btnAfterDate)) {
            $rules = array(
                'afterDate' => 'required|date|after:today'
            );
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $request->session()->flash('afterDate', array('class' => 'danger',
                    'message' => 'The Date is must be greater than today'));
            } else {
                $request->session()->flash('afterDate', array('class' => 'success',
                    'message' => 'after:date Validation rule has been passed by given date'));
            }
        } else if (!empty($request->btnAlpha)) {
            $rules = array(
                'alpha' => 'required|alpha'
            );
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $request->session()->flash('alpha', array('class' => 'danger',
                    'message' => 'The filed must contains only Alfabets only'));
            } else {
                $request->session()->flash('alpha', array('class' => 'success',
                    'message' => 'alfa Validation rule has been passed by given textbox'));
            }
        }else if (!empty($request->btnAlphaDash)) {
            $rules = array(
                'alpha-dash' => 'required|alpha-dash',
            );
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $request->session()->flash('alpha-dash', array('class' => 'danger',
                    'message' => 'The filed must contains only Alfabets, dashes and underscores only'));
            } else {
                $request->session()->flash('alpha-dash', array('class' => 'success',
                    'message' => 'alfa-dashes Validation rule has been passed by given textbox'));
            }
        
        }else if (!empty($request->btnAlphaNum)) {
            $rules = array(
                'alpha-num' => 'required|alpha-num',
            );
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $request->session()->flash('alpha-num', array('class' => 'danger',
                    'message' => 'The filed must contains only Alfabets and numbers only'));
            } else {
                $request->session()->flash('alpha-num', array('class' => 'success',
                    'message' => 'alfa-num Validation rule has been passed by given textbox'));
            }        
        }else if (!empty($request->btnAlphaNum)) {
            $rules = array(
                'alpha-num' => 'required|alpha-num',
            );
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $request->session()->flash('alpha-num', array('class' => 'danger',
                    'message' => 'The filed must contains only Alfabets and numbers only'));
            } else {
                $request->session()->flash('alpha-num', array('class' => 'success',
                    'message' => 'alfa-num Validation rule has been passed by given textbox'));
            }        
        }else if (!empty($request->btnArray)) {
            $rules = array(
                'array' => 'required|array',
            );
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                $request->session()->flash('array', array('class' => 'danger',
                    'message' => 'The filed must contains a PHP array'));
            } else {
                $request->session()->flash('array', array('class' => 'success',
                    'message' => 'array Validation rule has been passed by given textbox'));
            }
        }
        
        return redirect('post/create');
    }

}
