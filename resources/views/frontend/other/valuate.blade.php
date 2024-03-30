@extends('layouts.front')
@section('title')
    
@endsection
 <script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 <script src="{{ asset('frontend/js/converter.js') }}" defer></script>
@section('content')
    <div class="card">
        <div class="class-header">
            <h2 style="text-align: center;">Valuate My Property</h2>
        </div>
        <section>
            <div class="rotate">
            <section class="news-message">
                <p>**Disclaimer : Please be aware that the rate displayed after valuation calculating by machine on the basis of Malpot rule and with the help of experts**</p>
                </section>

                </div>
            </section>
            <div class="card-body">
                <form action="{{url ('value-property')}}" method="POST" enctype="multipart/form-data">
                
                    @csrf
                    <div class="flex-container" style="float: right;">
                    <img src="{{URL::asset('assets/images/value.png')}}"  >
                    </div>
                    <div class="row">

                    <div class="col-md12 mb-3" >
                    <label for="">Type</label>
                        <select class="form-select" id="propertyType" onchange="optionOnChange()" name="cate_id" aria-label="Default select example" required>
                            <option disabled selected value="selected">Select a Property Type</option>
                            @foreach($catagory as $item)
                                <option value="{{$item->id}}">{{$item->type}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-xs-12 col-sm-2 col-md-3 control-label">
                            <label for="">Province</label>
                            <select class="form-select" id="provience" name="provience" aria-label="Default select example" required>
                            <option disabled selected value="selected">Select Province </option>
                            @foreach($provience as $item)
                                <option >{{$item}}</option>
                            @endforeach>
                            </select>
                        </div>

                        <div class="col-xs-12 col-sm-2 col-md-3 control-label">
                            <label for="">District</label>
                            <select class="form-select" id="district" name="district" aria-label="Default select example" required>
                            <option disabled selected value="selected">Select District </option>
                            @foreach($district as $item)
                                <option >{{$item}}</option>
                            @endforeach
                            </select>
                        </div>    


                        <div class="col-xs-12 col-sm-2 col-md-3 control-labe">
                            <label for="">Postal Code</label>
                            <select class="form-select" id="postal_code" name="postal_code" aria-label="Default select example" required>
                            <option disabled selected value="selected">Select Postal Code </option>
                            @foreach($postal_code as $item)
                                <option >{{$item}}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="col-xs-12 col-sm-2 col-md-3 control-labe">
                            <label for="">City</label>
                            <select class="form-select" id="city" name="city" aria-label="Default select example" required>
                            <option disabled selected value="selected">Select City </option>
                            @foreach($city as $item)
                                <option >{{$item}}</option>
                            @endforeach>
                            </select>
                        </div>

                        <div class="col-xs-12 col-sm-2 col-md-3 control-labe">
                            <label for="">Street Number/ Name</label>
                            <select class="form-select" id="street_no" name="street_no" aria-label="Default select example" required>
                            <option disabled selected value="selected">Select Street Number/Name </option>
                            @foreach($street_no as $item)
                                <option>{{$item}}</option>
                            @endforeach>
                            </select>
                        </div>

                        <div class="col-xs-12 col-sm-2 col-md-3 control-labe">
                            <label for="">Tole</label>
                            <select class="form-select" id="tole" name="tole" aria-label="Default select example" required>
                            <option disabled selected value="selected">Select Tole </option>
                            @foreach($tole as $item)
                                <option >{{$item}}</option>
                            @endforeach>
                            </select>
                        </div>

                        <div class="col-xs-12 col-sm-1 col-md-3 control-labe">
                            <label for="">Ward Number</label>
                            <select class="form-select" id="ward_no" name="ward_no" aria-label="Default select example" require>
                            <option disabled selected value="selected">Select Ward Number </option>
                            @foreach($ward_no as $item)
                                <option required>{{$item}}</option>
                            @endforeach>
                            </select>
                        </div>

            
                        <div class="col-xs-12 col-sm-2 col-md-3 control-label">
                            <label for="">Total Area</label>
                            <input type="any" id="area" class="form-control" name= "area" placeholder="Enter length in Anna" required>
                        </div>

                        <div id="text1" class="col-xs-12 col-sm-2 col-md-3 " >
                            <label for="">Area of the Storey 1 :</label>
                            <div id='TextBoxesGroup'>
                                <div id="TextBoxDiv1">
                                    <input type="any" id="storey1" class="form-control" name= "storey1" placeholder="Enter area in Anna" >
                                </div>
                            </div>
                        </div>

                        <div id="text3" class="col-xs-12 col-sm-2 col-md-3 " >
                            <input type='button' class="btn btn-outline-success" value='Add Storey' id='addButton' />
                            <br/>
                            <br/>
                            <input type='button' class="btn btn-outline-danger" value='Remove Storey' id='removeButton' />
                        </div>
                            
                       

                        <div id="text4" class="col-xs-12 col-sm-2 col-md-3 control-label">
                            <label for="">Age of Structure</label>
                            <input type="number" id="structure_age" class="form-control" name= "structure_age" placeholder="Enter age of structure" >
                        </div>
                        
                        <div class="col-md-12">
                            <button type="submit"  class="btn btn-primary">Submit</button>    
                           <button type="button" onclick="Clear()" class="btn btn-primary">Clear</button>    
                        </div>
 
                    </div>
                </form>
                <hr>
                <div class="converter" style="width:300px; margin:5px">
                    <h2>Converting tool</h2><br>
                    <input type="text" placeholder="Input" id="input">
                    <select id="inputType">
                        <option value="Ropani">Ropani</option>
                        <option value="Anna">Anna</option>
                        <option value="Paisa">Paisa</option>
                        <option value="Daam">Daam</option>
                        <option value="Bigha">Bigha</option>
                        <option value="Kattha">Kattha</option>
                        <option value="SqFeet">Sq. Feet</option>
                    </select><br>
                    <span>=</span><br>
                    <input type="text" placeholder="Result" id="result">
                     

                    <select id="resultType">
                        <option value="Ropani">Ropani</option>
                        <option value="Anna">Anna</option>
                        <option value="Paisa">Paisa</option>
                        <option value="Daam">Daam</option>
                        <option value="Bigha">Bigha</option>
                        <option value="Kattha">Kattha</option>
                        <option value="Dhur">Dhur</option>
                        <option value="SqFeet">Sq. Feet</option>
                    </select>
                </div>
            </div>
        </div>
        


<script type="text/javascript">
 $(document).ready(function () {
 var counter = 2;
    $("#addButton").click(function () {

        if (counter > 10) {
                alert("Only 10 textboxes allow");
                return false;
            }
           
        var newTextBoxDiv = $(document.createElement('div')).attr("id", 'TextBoxDiv' + counter);

        newTextBoxDiv.after().html('<label>Area of the Storey'+' ' + counter + ' : </label>' +
        '<input type="any" class = "form-control inputs" name="storey' + counter + '" id="textbox' + counter + '" value="" placeholder="Enter Storey area">');
        newTextBoxDiv.appendTo("#TextBoxesGroup");
            counter++;
        });

        $("#removeButton").click(function () {
            if (counter == 2) {
                alert("No more textbox to remove");
                return false;
            }
              counter--;
             $("#TextBoxDiv" + counter).remove();
              });
    });
</script>
 
@endsection