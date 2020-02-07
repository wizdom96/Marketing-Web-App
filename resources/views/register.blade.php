@extends ('layout')
 
@section('content')
 
    <h2>Register</h2>
    <form action="{{url('post-registration')}}" method="POST" id="regForm">
        {{ csrf_field() }}
        
 
        <div class="form-group">
            <label for="user">Name:</label>
            <input type="name" class="form-control" id="name" name="name">
        </div>
        @if ($errors->has('name'))
                  <span class="error">{{ $errors->first('name') }}</span>
                  @endif   
 
        <div class="form-group">
            <label for="text">Prename:</label>
            <input type="text" class="form-control" id="prename" name="prename">
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        @if ($errors->has('email'))
                  <span class="error">{{ $errors->first('email') }}</span>
                  @endif  
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        @if ($errors->has('password'))
                  <span class="error">{{ $errors->first('password') }}</span>
                  @endif  
        
 
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
 
@endsection