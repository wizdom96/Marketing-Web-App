@extends('layouts.app')

@section('newad')
<head>


</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Auto Details') }}</div>

                <div class="card-body">
                    <form action="{{ ('postadd') }}" method="POST" enctype="multipart/form-data">
    
                    {{csrf_field()}}

                        <div class="form-group row">
                            <label for="make" class="col-md-4 col-form-label text-md-right">{{ __('Make') }}</label>
                            <div class="col-md-6">
                            <select  id="make" name="make" class="form-control">
                            <option value="">-- Select make --</option>
                            @foreach ($make as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                               
                                @endforeach
                                
                                </select>
                               
                            </div>
                        </div> 
                        
                       
                        <div class="form-group row">
                            <label for="model" class="col-md-4 col-form-label text-md-right">{{ __('Model') }}</label>

                            <div class="col-md-6">
                            <select name="model" class="form-control">
                                </select>
                            </div>
                        </div>
                        
                      

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control " name="title" required >

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control " name="description" required >

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control " name="phone" required >

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

    

                        <div class="form-group row">
                            <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>

                            <div class="col-md-6">
                            <select name="year" id="year">
                                <option value="0">Select Year</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text"  name="city" required>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price $') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number"  name="price" required>

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="power" class="col-md-4 col-form-label text-md-right">{{ __('Power (kw)') }}</label>

                            <div class="col-md-6">
                                <input id="power" type="text"  name="power" required>

                                @error('power')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="transmission" class="col-md-4 col-form-label text-md-right">{{ __('Transmission') }}</label>

                            <div class="col-md-6">
                                <select name="transmission" id="transmission">
                                <option value="0">Select transmission</option>
                                <option value="automatic">Automatic</option>
                                <option value="manual">Manual</option>
                                <option value="tiptronic">Steptronic/Tiptronic</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="fuel" class="col-md-4 col-form-label text-md-right">{{ __('Fuel') }}</label>

                            <div class="col-md-6">
                            <select name="fuel" id="fuel">
                                <option value="0">Fuel Type</option>
                                <option value="petrol">Petrol</option>
                                <option value="diesel">Diesel</option>
                                <option value="electric">Electric</option>
                                <option value="hybrid">Hybrid</option>
                                <option value="lpg">Lpg</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="km" class="col-md-4 col-form-label text-md-right">{{ __('Kilometer') }}</label>

                            <div class="col-md-6">
                                <input id="km" type="text"  name="km" required>

                                @error('km')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                            <div class="col-md-6">
                            <select name="type" id="type">
                                <option value="0">Select Vehicle Type</option>
                                <option value="hatchback">Hatchback</option>
                                <option value="sedan">Sedan</option>
                                <option value="mpv">MPV</option>
                                <option value="suv">SUV</option>
                                <option value="crossover">Crossover</option>
                                <option value="coupe">Coupe</option>
                                <option value="convertible">Convertible</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="km" class="col-md-4 col-form-label text-md-right">{{ __('Images') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file"  name="image" required>

                                @error('images')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <input id="invisible_id" name="invisible" type="hidden" value="{{((Auth()->user()->id))}}">

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit"  class="btn btn-primary">
                               

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>
                
<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="make"]').on('change', function() {
            var makeID = $(this).val();
            if(makeID) {
                $.ajax({
                    url: 'newad/ajax/'+makeID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        
                        $('select[name="model"]').empty();
                        $.each(data, function(key, value) {
                            console.log(key);
                            console.log(value);
                            $('select[name="model"]').append('<option value="'+ key +'">'+ value.car_model +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="model"]').empty();
            }
        });
    });
</script>
@endsection
