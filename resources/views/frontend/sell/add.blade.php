@extends('layouts.front')

@section('content')
    <div class="card">
        <div class="class-header">
            <h2 style="text-align: center;">Sell My Property</h2>
        </div>
            <div class="card-body">
                <form action="{{url ('insert-property')}}" method="POST" enctype="multipart/form-data">
                
                    @csrf
                    
                    <div class="flex-container" style="float: right; height: 600px;">
                        <img src="{{URL::asset('assets/images/sell.png')}}"  >
                    </div>
                    <div class="row">

                    <div class="col-md12 mb-3" >
                        <label for="">Type</label>
                        <select id="propType" onchange="optionChange()" class="form-select" name="cate_id" aria-label="Default select example">
                            <option disabled selected>Select a Property Type</option>
                            @foreach($catagory as $item)
                                <option  value="{{$item->id}}">{{$item->type}}</option>
                            @endforeach
                        </select><br><br>
                    </div>
                    <h4>Enter Location Details</h4> <br><br>
                    <div class="col-xs-12 col-sm-2 col-md-3 control-label">
                            <label for="">Provience</label>
                            <select  class="form-select" name= "provience" required="onsubmit" >
                                <option disabled selected>Select Provience </option>
                                <option>Provience no 1</option>
                                <option>Madhesh Pradesh</option>
                                <option>Bagmati Pradesh</option>
                                <option>Gandaki Pradesh</option>
                                <option>Lumbini Pradesh</option>
                                <option>Karnali Pradesh</option>
                                <option>Sudurpashchim Prades</option>
                            </select>
                        </div>

                        <div class="col-xs-12 col-sm-2 col-md-3 control-label">
                            <label for="">District</label>
                            <select class="form-select" name= "district" aria-label="Default select example" required="onsubmit" >
                            <option disabled selected>Select District </option>
                                <option>Bhojpur</option>
                                <option>Dhankuta</option> 
                                <option>Ilam</option>
                                <option>Jhapa</option>  
                                <option>Khotang</option>
                                <option>Morang</option>
                                <option>Okhaldhunga</option>
                                <option>Panchthar</option>
                                <option>Sankhuwasabha</option>
                                <option>Solukhumbu</option>
                                <option>Sunsari</option>
                                <option>Taplejung</option>
                                <option>Terhathum</option>
                                <option>Udayapur</option>
                                <option>Bara</option>
                                <option>Dhanusa</option> 
                                <option>Mahottari</option>
                                <option>Parsa</option>  
                                <option>Rautahat</option>
                                <option>Saptari</option>
                                <option>Sarlahi</option>
                                <option>Siraha</option>
                                <option>Bhaktapur</option>
                                <option>Chitwan</option>
                                <option>Dhading</option>
                                <option>Dolakha</option>
                                <option>Kathmandu</option>
                                <option>Kavrepalanchok</option>
                                <option>Lalitpur</option>
                                <option>Makawanpur</option>
                                <option>Nuwakot</option>
                                <option>Ramechhap</option>
                                <option>Rasuwa</option>
                                <option>Sindhuli</option>
                                <option>Sindhupalchok</option>
                                <option>Baglung</option>
                                <option>Gorkha</option>
                                <option>Kaski</option>
                                <option>Lamjung</option>
                                <option>Manang</option>
                                <option>Mustang</option>
                                <option>Myagdi</option>
                                <option>Nawalpur</option>
                                <option>Parbat</option>
                                <option>Syangja</option>
                                <option>Tanahu</option>
                                <option>Arghakhanchi</option>
                                <option>Banke</option>
                                <option>Bardiya</option>
                                <option>Dang</option>
                                <option>Gukmi</option>
                                <option>Kapilvastu</option>
                                <option>Parasi</option>
                                <option>Palpa</option>
                                <option>Pyuthan</option>
                                <option>Rolpa</option>
                                <option>Rukum</option>
                                <option>Rupandehi</option>
                                <option>Dolpa</option>
                                <option>Humla</option>
                                <option>Jajarkot</option>
                                <option>Jumla</option>
                                <option>Kalikot</option>
                                <option>Mugu</option>
                                <option>Rukum Paschim</option>
                                <option>Salyan</option>
                                <option>Surkhet</option>
                                <option>Achham</option>
                                <option>Baitadi</option>
                                <option>Bajhang</option>
                                <option>Bajura</option>
                                <option>Dadeldhura</option>
                                <option>Darchula</option>
                                <option>Doti</option>
                                <option>Kailali</option>
                                <option>Kanchanpur</option>

                            </select>
                        </div>    

                       

                        <div class="col-xs-12 col-sm-2 col-md-2 control-label">
                            <label for="">Postal Code</label>
                            <input type="number" class="form-control" name= "postal_code" required="onsubmit" >
                        </div>

                        <div class="col-xs-12 col-sm-2 col-md-4 control-label">
                            <label for="">City</label>
                            <input type="text" class="form-control" name= "city" required="onsubmit" >
                        </div>

                        <div class="col-xs-12 col-sm-2 col-md-2 control-label">
                            <label for="">Ward Number</label>
                            <input type="number" class="form-control" name= "ward_no" required="onsubmit" >
                        </div>

                        <div class="col-xs-12 col-sm-2 col-md-4 control-label">
                            <label for="">Tole</label>
                            <input type="text" class="form-control" name= "tole" required="onsubmit" >
                        </div>

                        <div class="col-xs-12 col-sm-2 col-md-3 control-label">
                            <label for="">Street Number/ name</label>
                            <input type="text" class="form-control" name= "street_no" required="onsubmit" ><br><br>
                        </div>
                        <hr>

                        <h4>Enter Detail Discription</h4>
                        <br>

                        <div class="col-xs-12 col-sm-2 col-md-3 control-label">
                            <label for="">Road length</label>
                            <input type="text" class="form-control" name= "road_length" placeholder="Enter length in feet" required="onsubmit" >
                        </div>

                        <div class="col-xs-12 col-sm-2 col-md-3 control-label">
                            <label for="">Road Type</label>
                            <select  class="form-select" name= "road_type" required="onsubmit" >
                                <option disabled selected>Select Road Type </option>
                                <option>Gravelled</option>
                                <option>Soil Stabled</option>
                                <option>Paved</option>
                                <option>Black Toped</option>
                                <option>Alley</option>
                            </select>
                        </div>

                        <div class="col-xs-12 col-sm-2 col-md-3 control-label">
                            <label for="">Direction Faced</label>
                            <select  class="form-select" name= "direction_faced" required="onsubmit" >
                                <option disabled selected >Direction Faced </option>
                                <option>East</option>
                                <option>West</option>
                                <option>North</option>
                                <option>South</option>
                            </select><br><br>
                        </div>

                        <div class="col-xs-12 col-sm-2 col-md-3 control-label">
                            <label for="">Total Area</label>
                            <input type="number" class="form-control" name= "area" placeholder="Enter length in Anna" required="onsubmit" >
                        </div>
                        <div id="text1" class="col-xs-12 col-sm-2 col-md-3 control-label">
                            <label for="">Structure Area</label>
                            <input type="text" class="form-control" name= "structure_area" placeholder="Enter length in Anna"  >
                        </div>

                        <div id="text2" class="col-xs-12 col-sm-2 col-md-2 control-label">
                            <label for="">Number of Room</label>
                            <input type="number" class="form-control" name= "room_no"  >
                        </div>

                        <div id="text3" class="col-xs-12 col-sm-2 col-md-2 control-label">
                            <label for="">Number of Stories</label>
                            <input type="number" class="form-control" name= "stories_no"  >
                        </div>

                        <div id="text4" class="col-xs-12 col-sm-2 col-md-3 control-label">
                            <label for="">Age of Structure</label>
                            <input type="number" class="form-control" name= "structure_age">
                        </div>

                        <hr>
                        <h4>Enter Problem Faced</h4>

                        <div class="col-xs-12 col-sm-2 col-md-2 control-label">
                            <label for="">High Tension</label>
                            <input type="checkbox" name= "hypertension">
                        </div>

                        <div class="col-xs-12 col-sm-2 col-md-2 control-label">
                            <label for="">River Side</label>
                            <input type="checkbox" name= "river_side">
                        </div>
                        <hr>
                        <h4>Enter Facilities</h4>
                        
                        <div class="col-xs-12 col-sm-2 col-md-2 control-label">
                            <label for="">Water Supply</label>
                            <input type="checkbox" name= "water_supply">
                        </div>

                        <div class="col-xs-12 col-sm-2 col-md-2 control-label">
                            <label for="">Drainage</label>
                            <input type="checkbox" name= "drainage">
                        </div>

                        <div class="col-xs-12 col-sm-2 col-md-2 control-label">
                            <label for="">Electricity</label>
                            <input type="checkbox" name= "electricity">
                        </div>

                        <div class="col-xs-12 col-sm-2 col-md-2 control-label">
                            <label for="">Public Transport</label>
                            <input type="checkbox" name= "p_transport">
                        </div>

                        <div class="col-md-12">
                            <label for="">Description</label>
                            <textarea name="discription" rows="5" class="form-control"  required="onsubmit"> </textarea>
                        </div> 


                        <div class="col-xs-2">
                            <label for="">Selling Rate</label>
                            <input type="number" class="form-control" name= "selling_rate"  required="onsubmit">
                        </div>

                        <div class="col-md-12">
                            <label for="">Select Main Picture</label><br>
                            <input type="file" name= "image" class="fom-control">
                        </div>

                        <div class="col-md-12">
                            <label for="">Select Other Pictures</label><br/>
                            <input type="file" name= "images[]" class="fom-control"multiple>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>    
                        </div>
 
                    </div>
                </form>
            </div>
        </div>
@endsection