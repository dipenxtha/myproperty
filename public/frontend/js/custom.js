var show = document.getElementById("propType");
function optionChange()
{
if(show.value== "1"){
    document.getElementById("text1").style.visibility="hidden";
    document.getElementById("text2").style.visibility="hidden";
    document.getElementById("text3").style.visibility="hidden";
    document.getElementById("text4").style.visibility="hidden";

}
else{
    document.getElementById("text1").style.visibility="visible";
    document.getElementById("text2").style.visibility="visible";
    document.getElementById("text3").style.visibility="visible";
    document.getElementById("text4").style.visibility="visible";

}
}


var display = document.getElementById("propertyType");
function optionOnChange()
{
if(display.value== "1"){
    document.getElementById("text1").style.visibility="hidden";
    document.getElementById("text3").style.visibility="hidden";
    document.getElementById("text4").style.visibility="hidden";

}
else{
    document.getElementById("text1").style.visibility="visible";
    document.getElementById("text3").style.visibility="visible";
    document.getElementById("text4").style.visibility="visible";

}
}


function Clear(){

    input = document.getElementsByClassName("inputs")
    for(i of input){
    	i.value=""; ///this emptys the inputs
    }
    document.getElementById("propertyType").value= 'selected';
    document.getElementById("zone").value= 'selected';
    document.getElementById("district").value= 'selected';
    document.getElementById("provience").value= 'selected';
    document.getElementById("postal_code").value= 'selected';
    document.getElementById("city").value= 'selected';
    document.getElementById("street_no").value= 'selected';
    document.getElementById("tole").value= 'selected';
    document.getElementById("ward_no").value= 'selected';
    document.getElementById("area").value= "";
    document.getElementById("structure_age").value= "";
    document.getElementById("storey1").value= "";
}


var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
// var img = document.getElementById("myImg");
 var img = document.getElementsByClassName("newImg")
 for(var i = 0; i <= img.length; i++){
   var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img[i].onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
      modal.style.display = "none";
    }
 }