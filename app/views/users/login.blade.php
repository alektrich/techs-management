@extends('default')
@section('body')

<form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-offset-3 col-sm-2 control-label">Email</label>
    <div class="col-sm-3">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-offset-3 col-sm-2 control-label">Password</label>
    <div class="col-sm-3">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-3">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-3">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>



@stop