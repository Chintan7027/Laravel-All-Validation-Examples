@extends('layouts.master')
@section('content-a')

<div class="col-md-12 col-lg-12 col-sm-12">
    <b class="text-primary">accepted</b>
    <p>The field under validation must be yes, on, 1, or true. This is useful for validating "Terms of Service" acceptance.</p>
    <div class="form-group">
        <input  type="checkbox" name="checkbox">
        I agree to the terms and conditions of this website
    </div>

    @if(Session::has('checkbox'))
    <div class="alert alert-{{ Session::get('checkbox')['class'] }}">
        {{ Session::get('checkbox')['message'] }}
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </div>
    @endif
    <button type="submit" name="btnAccepted" value="accepted">Test Accepted</button>
</div>

<div class="col-md-12 col-lg-12 col-sm-12">
    <hr>
    <b class="text-primary">active_url</b>
    <p>The field under validation must be a valid URL according to the <a href="http://php.net/manual/en/function.checkdnsrr.php" target="_blank">checkdnsrr</a> PHP function.</p>
    <div class="form-group">
        <input type="text" class="form-control" name="URL" placeholder="Enter Website URL or IP address"/>
    </div>
    @if(Session::has('URL'))
    <div class="alert alert-{{ Session::get('URL')['class'] }}">
        {{ Session::get('URL')['message'] }}
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </div>
    @endif
    <button type="submit" name="btnActiveURL" value="accepted">Check For Valid URL</button>
</div>

<div class="col-md-12 col-lg-12 col-sm-12">
    <hr>
    <b class="text-primary">after:date</b>
    <p>The field under validation must be a value after a given date. The dates will be passed into the <a href="http://php.net/manual/en/function.strtotime.php" target="_blank">strtotime</a> PHP function.</p>
    Variations: after:tomorrow, after:today, after:yesterday
    <div class="form-group">
        <input type="text" class="form-control" name="afterDate" placeholder="Enter Date in YYYY-MM-DD"/>
    </div>
    @if(Session::has('afterDate'))
    <div class="alert alert-{{ Session::get('afterDate')['class'] }}">
        {{ Session::get('afterDate')['message'] }}
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </div>
    @endif
    <button type="submit" name="btnAfterDate" value="accepted">Validate Date</button>
</div>

<div class="col-md-12 col-lg-12 col-sm-12">
    <hr>
    <b class="text-primary">alpha</b>
    <p>The field under validation must be entirely alphabetic characters.</p>

    <div class="form-group">
        <input type="text" class="form-control" name="alpha" placeholder="Enter any string with alphabets only"/>
    </div>
    @if(Session::has('alpha'))
    <div class="alert alert-{{ Session::get('alpha')['class'] }}">
        {{ Session::get('alpha')['message'] }}
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </div>
    @endif
    <button type="submit" name="btnAlpha" value="accepted">Validate Alphabets </button>
</div>
<div class="col-md-12 col-lg-12 col-sm-12">
    <hr>
    <b class="text-primary">alpha-dash</b>
    <p>The field under validation must be entirely alphabetes, dashes and underscores characters.</p>

    <div class="form-group">
        <input type="text" class="form-control" name="alpha-dash" placeholder="Enter any string with alphabets dashes and underscore only"/>
    </div>
    @if(Session::has('alpha-dash'))
    <div class="alert alert-{{ Session::get('alpha-dash')['class'] }}">
        {{ Session::get('alpha-dash')['message'] }}
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </div>
    @endif
    <button type="submit" name="btnAlphaDash" value="accepted">Validate Alphabets-Dash </button>
</div>

<div class="col-md-12 col-lg-12 col-sm-12">
    <hr>                          
    <b class="text-primary">alpha_num</b>
    <p>The field under validation must be entirely alpha-numeric characters.</p>

    <div class="form-group">
        <input type="text" class="form-control" name="alpha-num" placeholder="Enter any string with alphabets and numbers only"/>
    </div>
    @if(Session::has('alpha-num'))
    <div class="alert alert-{{ Session::get('alpha-num')['class'] }}">
        {{ Session::get('alpha-num')['message'] }}
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </div>
    @endif
    <button type="submit" name="btnAlphaNum" value="accepted">Validate Alphabets-Numbers </button>
</div>
<div class="col-md-12 col-lg-12 col-sm-12">
    <hr>                          
    <b class="text-primary">array</b>
    <p>The field under validation must be a PHP array. This validation helps when use of array in input html tag. Say for e.g.
        <b> name="checkbox[]", or  name="textbox[]"</b></p>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" name="array[]" placeholder="Enter Hobby 1"/>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" name="array[]" placeholder="Enter Hobby 2"/>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" name="array[]" placeholder="Enter Hobby 3"/>
            </div>
        </div>
    </div>
    @if(Session::has('array'))
    <div class="alert alert-{{ Session::get('array')['class'] }}">
        {{ Session::get('array')['message'] }}
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </div>
    @endif
    <button type="submit" name="btnArray" value="accepted">Validate PHP Array </button>
</div>

@stop

