@extends('layouts.master')
@section('content')
<div class="text-center">
  <div class="row">
  <div class="col-sm-4">
  </div>
  <div class="col-sm-4">
    <form class="form-signin">
          <img class="mb-4" src="./Signin Template for Bootstrap_files/bootstrap-solid.svg" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
          <br>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          <p class="mt-5 mb-3 text-muted">© 2019-2020</p>
    </form>
    <div id="httpSpyContainer_sq27T8VFex4CtQ623afyMoiYA89kG6UZ" class="bottomRight noMargin noToolbar"></div>
  </div>
  <div class="col-sm-4">
  </div>
  </div>
  </div>
@stop
