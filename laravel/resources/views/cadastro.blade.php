@extends('layouts/app')

@section('conteudo')

<div class='container'>


<form class="form-horizontal" method="post" action="{{url('insert')}}">
  <fieldset>
    <legend>Faça seu Cadastro </legend>

    <div class="form-group">
      <label for="inputNome"  class="col-lg-2 control-label">Nome</label>
      <div class="col-lg-10">
        <input class="form-control" name="name" id="inputNome" placeholder="Name" type="text">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input class="form-control" name="email" id="inputEmail" placeholder="Email" type="text">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input class="form-control" name="password" id="inputPassword" placeholder="Password" type="password">
      </div>
    </div>
    
    <div class="form-group">
    	<input type="hidden" name="_token" value="{{csrf_token()}}">
    </div>
      
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

</div>


@stop