@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="class-header">
            <h4>Add Rates</h4>
        </div>
            <div class="card-body">
                <form action="{{url ('update-rate/'.$rate->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                    <div class="col-xs-2">
                            <label for="">Provience</label>
                            <select  class="form-control" name= "provience"  required="onsubmit">
                                <option disabled selected>{{$rate->provience}}</option>
                                <option>Provience no 1</option>
                                <option>Madhesh Pradesh</option>
                                <option>Bagmati Pradesh</option>
                                <option>Gandaki Pradesh</option>
                                <option>Lumbini Pradesh</option>
                                <option>Karnali Pradesh</option>
                                <option>Sudurpashchim Prades</option>
                            
                            </select>
                        </div>

                        <div class="col-xs-2">
                            <label for="">District</label> 
                            <select class="form-control" name= "district" aria-label="Default select example"  required="onsubmit">
                            <option selected="select">{{$rate->district}} </option>
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


                        <div class="col-xs-2">
                            <label for="">Postal Code</label>
                            <input type="number" value="{{$rate->postal_code}}"class="form-control" name= "postal_code"  required="onsubmit">
                        </div>

                        <div class="col-xs-2">
                            <label for="">City</label>
                            <input type="text" value="{{$rate->city}}"class="form-control" name= "city"  required="onsubmit">
                        </div>

                        <div class="col-xs-2">
                            <label for="">Street Name / Number</label>
                            <input type="text" value="{{$rate->street_no}}" class="form-control" name= "street_no"  required="onsubmit">
                        </div>

                        <div class="col-xs-2">
                            <label for="">Tole</label>
                            <input type="text" value="{{$rate->tole}}" class="form-control" name= "tole"  required="onsubmit">
                        </div>

                        <div class="col-xs-2">
                            <label for="">Ward Number</label>
                            <input type="number" value="{{$rate->ward_no}}" class="form-control" name= "ward_no"  required="onsubmit">
                        </div>

                        <div class="col-xs-2">
                            <label for="">Fair Market Rate</label>
                            <input type="number" value="{{$rate->max_rate}}" class="form-control" name= "max_rate"  required="onsubmit">
                        </div>

                        <div class="col-xs-2">
                            <label for="">Distress Value /Rate</label>
                            <input type="number" value="{{$rate->min_rate}}" class="form-control" name= "min_rate" required="onsubmit">
                        </div>
                        

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>    
                        </div>
 
                    </div>
                </form>
            </div>
        </div>
@endsection