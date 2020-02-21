@extends('layouts.app')

@section('make')
   @if     (collect(request()->segments())->last()==='make')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
                    <form class="form-horizontal" method="POST" action="{{ url('dashboard/make') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Make Car') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                               
                            </div>
                            
                            <button type="submit" class="btn btn-primary">
                                    SAVE
                                </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br>
@endif
@if     (collect(request()->segments())->last()==='makemodel')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
                    <form class="form-horizontal" method="POST" action="{{ url('dashboard/makemodel') }}">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="make" class="col-md-4 col-form-label text-md-right">{{ __('Make') }}</label>
                            <div class="col-md-6">
                            <select name="make" id="make">
                            @foreach ($cars as $car)
                                <option value="{{$car->car}}" >{{$car->car}} </option>   
                                @endforeach
                                </select>

                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('New Model') }}</label>

                            <div class="col-md-6">
                                <input id="model" type="text" name="model"  required autocomplete="model" autofocus>
                               
                            </div>
                           
                            <button type="submit" class="btn btn-primary">
                                    SAVE
                                </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br>



@endif
@endsection