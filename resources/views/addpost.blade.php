@extends('layout')

@section('addpost')
<head>


</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Auto Details') }}</div>

                <div class="card-body">
                    <form id="carForm" method="POST"  action="{{url('createpost')}}">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Make') }}</label>
                            <div class="col-md-6">
                            <select name="make" id="make">
                                <option value="0">Select Make</option>
                                <option value="astonmartin">Aston Martin</option>
                                <option value="audi">Audi</option>
                                <option value="bentley">Bentley</option>
                                <option value="bmw">BMW</option>
                                <option value="daimlerChrysler">DaimlerChrysler</option>
                                <option value="ferrari">Ferrari</option>
                                <option value="ford">Ford</option>
                                <option value="gm">GM</option>
                                <option value="honda">Honda</option>
                                <option value="hyundai">Hyundai</option>
                                <option value="jaguar">Jaguar</option>
                                <option value="kia">KIA</option>
                                <option value="lamborghini">Lamborghini</option>
                                <option value="landrover">Land Rover</option>
                                <option value="lotus">Lotus</option>
                                <option value="maserati">Maserati</option>
                                <option value="mazda">Mazda</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="mitsubishi">Mitsubishi</option>
                                <option value="nissan">Nissan</option>
                                <option value="porsche">Porsche</option>
                                <option value="suzuki">Suzuki</option>
                                <option value="toyota">Toyota</option>
                                <option value="volkswagen">Volkswagen</option>
                                <option value="volvo">Volvo</option>
                                </select>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Model') }}</label>

                            <div class="col-md-6">
                            <select name="model" id="model">

                                <option value="0">Select Model</option>
                                <option value="a8"  data-make="audi">A8</option>
                                <option value="a3"  data-make="audi">A3</option>
                                <option value="a4"  data-make="audi">A4</option>
                                <option value="a6"  data-make="audi">A6</option>
                                <option value="tt"  data-make="audi">TT</option>
                                <option value="arnage"  data-make="bentley">Arnage</option>
                                <option value="continental"  data-make="bentley">Continental</option>
                                <option value="325"  data-make="bmw">325</option>
                                <option value="330"  data-make="bmw">330</option>
                                <option value="530"  data-make="bmw">530</option>
                                <option value="550"  data-make="bmw">550</option>
                                <option value="m3"  data-make="bmw">M3</option>
                                <option value="m5"  data-make="bmw">M5</option>
                                <option value="z4"  data-make="bmw">Z4</option>
                                <option value="300c"  data-make="daimlerChrysler">300C</option>
                                <option value="caravan"  data-make="daimlerChrysler">Caravan</option>
                                <option value="charger"  data-make="daimlerChrysler">Charger</option>
                                <option value="durango"  data-make="daimlerChrysler">Durango</option>
                                <option value="ram"  data-make="daimlerChrysler">Ram</option>
                                <option value="stratus"  data-make="daimlerChrysler">Stratus</option>
                                <option value="f430"  data-make="ferrari">F430</option>
                                <option value="612"  data-make="ferrari">612</option>
                                <option value="f141"  data-make="ferrari">F141</option>
                                <option value="escape"  data-make="ford">Escape</option>
                                <option value="explorer"  data-make="ford">Explorer</option>
                                <option value="focus"  data-make="ford">Focus</option>
                                <option value="f150"  data-make="ford">F150</option>
                                <option value="freestar"  data-make="ford">Freestar</option>
                                <option value="gt"  data-make="ford">GT</option>
                                <option value="mustang"  data-make="ford">Mustang</option>
                                <option value="taurus"  data-make="ford">Taurus</option>
                                <option value="thunderbird"  data-make="ford">Thunderbird</option>
                                <option value="c15000"  data-make="gm">C15000</option>
                                <option value="colorado"  data-make="gm">Colorado</option>
                                <option value="corvette"  data-make="gm">Corvette</option>
                                <option value="escalade"  data-make="gm">Escalade</option>
                                <option value="solstice"  data-make="gm">Solstice</option>
                                <option value="c15000"  data-make="gm">C15000</option>
                                <option value="accord"  data-make="honda">Accord</option>
                                <option value="civic"  data-make="honda">Civic</option>
                                <option value="crx"  data-make="honda">Crx</option>
                                <option value="nsx"  data-make="honda">Nsx</option>
                                <option value="jazz"  data-make="honda">Jazz</option>
                                <option value="accent"  data-make="hyundai">Accent</option>
                                <option value="sonata"  data-make="hyundai">Sonata</option>
                                <option value="elantra"  data-make="hyundai">Elantra</option>
                                <option value="stype"  data-make="jaguar">S-Type</option>
                                <option value="xj8"  data-make="jaguar">XJ8</option>
                                <option value="xtype"  data-make="jaguar">X-Type</option>
                                <option value="sorento"  data-make="kia">Sorento</option>
                                <option value="rio"  data-make="kia">Rio</option>
                                <option value="sportage"  data-make="kia">Sportage</option>
                                <option value="gallardo"  data-make="lamborghini">Gallardo</option>
                                <option value="murcielago"  data-make="lamborghini">Murcielago</option>
                                <option value="lr3"  data-make="landrover">LR3</option>
                                <option value="rangerover"  data-make="landrover">Range Rover</option>
                                <option value="elise"  data-make="lotus">Elise</option>
                                <option value="cambiocorsa"  data-make="maserati">Cambiocorsa</option>
                                <option value="quattroporte"  data-make="maserati">Quattroporte</option>]
                                <option value="3"  data-make="mazda">3</option>
                                <option value="5"  data-make="mazda">5</option>
                                <option value="6"  data-make="6">6</option>
                                <option value="rx8"  data-make="mazda">RX-8</option>
                                <option value="mx5"  data-make="mazda">MX-5</option>
                                <option value="c230"  data-make="mercedes">C230</option>
                                <option value="c280"  data-make="mercedes">C280</option>
                                <option value="clk"  data-make="mercedes">CLK55</option>
                                <option value="e320"  data-make="mercedes">E320</option>
                                <option value="maybach"  data-make="mercedes">Maybach</option>
                                <option value="slr"  data-make="mercedes">SLR</option>
                                <option value="eclipse"  data-make="mitsubishi">Eclipse</option>
                                <option value="galant"  data-make="mitsubishi">Galant</option>
                                <option value="lancer"  data-make="mitsubishi">Lancer</option>
                                <option value="outlander"  data-make="mitsubishi">Outlander</option>
                                <option value="350z"  data-make="nissan">350Z</option>
                                <option value="altima"  data-make="nissan">Altima</option>
                                <option value="g35"  data-make="nissan">G35</option>
                                <option value="xterra"  data-make="nissan">Xterra</option>
                                <option value="skyline"  data-make="nissan">Skyline</option>
                                <option value="boxster"  data-make="porsche">Boxster</option>
                                <option value="cayenne"  data-make="porsche">Cayenne</option>
                                <option value="cayman"  data-make="porsche">Cayman</option>
                                <option value="aerio"  data-make="suzuki">Aeiro</option>
                                <option value="grandvitara"  data-make="suzuki">Grand Vitara</option>
                                <option value="camry"  data-make="toyota">Camry</option>
                                <option value="is250"  data-make="toyota">IS250</option>
                                <option value="scion"  data-make="toyota">Scion</option>
                                <option value="highlander"  data-make="toyota">Highlander</option>
                                <option value="golf"  data-make="volkswagen">Golf</option>
                                <option value="pheaton"  data-make="volkswagen">Pheaton</option>
                                <option value="jetta"  data-make="volkswagen">Jetta</option>
                                <option value="touareg"  data-make="volkswagen">Touareg</option>
                                <option value="s40"  data-make="volvo">S40</option>
                                <option value="s60"  data-make="volvo">S60</option>
                                <option value="s80"  data-make="volvo">S80</option>
                                <option value="v50"  data-make="volvo">V50</option>
                                <option value="xc90"  data-make="volvo">XC90</option>
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

@endsection
