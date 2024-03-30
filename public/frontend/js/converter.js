var input = document.getElementById('input');
var result =  document.getElementById('result');
var inputType = document.getElementById('inputType');
var resultType = document.getElementById('resultType');
var inputTypeValue, resultTypeValue;

input.addEventListener("keyup", myResult);
inputType.addEventListener("change", myResult);
resultType.addEventListener("change",myResult);

inputTypeValue = inputType.value;
resultTypeValue = resultType.value;

function myResult() {
    
    inputTypeValue = inputType.value;
    resultTypeValue = resultType.value;
    //ropani
    if (inputTypeValue === "Ropani" && resultTypeValue ==="Anna") {
        result.value = Number(input.value) *16;
    }
    else if (inputTypeValue === "Ropani" && resultTypeValue ==="Ropani") {
        result.value = Number(input.value);
    }
    else if (inputTypeValue === "Ropani" && resultTypeValue ==="Paisa") {
        result.value = Number(input.value) *16*4;
    }
    else if (inputTypeValue === "Ropani" && resultTypeValue ==="Daam") {
        result.value = Number(input.value) *16*4*4;
    } 
    else if (inputTypeValue === "Ropani" && resultTypeValue ==="Bigha") {
        result.value = Number(input.value) *0.075116598079561;
    } 
    else if (inputTypeValue === "Ropani" && resultTypeValue ==="Kattha") {
        result.value = Number(input.value)*1.5;
    } 
    else if (inputTypeValue === "Ropani" && resultTypeValue ==="Dhur") {
        result.value = Number(input.value) *30.05;
    } 
    else if (inputTypeValue === "Ropani" && resultTypeValue ==="SqFeet") {
        result.value = Number(input.value) *5476 ;
    }
    //anna
    if (inputTypeValue === "Anna" && resultTypeValue ==="Anna") {
        result.value = Number(input.value);
    }
    else if (inputTypeValue === "Anna" && resultTypeValue ==="Ropani") {
        result.value = Number(input.value)/16;
    }
    else if (inputTypeValue === "Anna" && resultTypeValue ==="Paisa") {
        result.value = Number(input.value) *4;
    }
    else if (inputTypeValue === "Anna" && resultTypeValue ==="Daam") {
        result.value = Number(input.value) *4*4;
    } 
    else if (inputTypeValue === "Anna" && resultTypeValue ==="Bigha") {
        result.value = Number(input.value) /213;
    } 
    else if (inputTypeValue === "Anna" && resultTypeValue ==="Kattha") {
        result.value = Number(input.value)/10.65;
    } 
    else if (inputTypeValue === "Anna" && resultTypeValue ==="Dhur") {
        result.value = Number(input.value) *1.88;
    } 
    else if (inputTypeValue === "Anna" && resultTypeValue ==="SqFeet") {
        result.value = Number(input.value) *342.25 ;
    }
    //paisa
    if (inputTypeValue === "Paisa" && resultTypeValue ==="Paisa") {
        result.value = Number(input.value);
    }
    else if (inputTypeValue === "Paisa" && resultTypeValue ==="Ropani") {
        result.value = Number((input.value)/16)/4;
    }
    else if (inputTypeValue === "Paisa" && resultTypeValue ==="Anna") {
        result.value = Number(input.value) /4;
    }
    else if (inputTypeValue === "Paisa" && resultTypeValue ==="Daam") {
        result.value = Number(input.value) *4;
    } 
    else if (inputTypeValue === "Paisa" && resultTypeValue ==="Bigha") {
        result.value = Number(input.value) *0.0049104683195592;
    } 
    else if (inputTypeValue === "Paisa" && resultTypeValue ==="Kattha") {
        result.value = Number(input.value) * 0.023473251028807;
    } 
    else if (inputTypeValue === "Paisa" && resultTypeValue ==="Dhur") {
        result.value = Number(input.value) *23.77;
    } 
    else if (inputTypeValue === "Paisa" && resultTypeValue ==="SqFeet") {
        result.value = Number(input.value) *85.56 ;
    }
    //Daam
    if (inputTypeValue === "Daam" && resultTypeValue ==="Daam") {
        result.value = Number(input.value);
    }
    else if (inputTypeValue === "Daam" && resultTypeValue ==="Ropani") {
        result.value = Number(((input.value)/16)/4)/4;
    }
    else if (inputTypeValue === "Daam" && resultTypeValue ==="Anna") {
        result.value = Number((input.value) /4)/4;
    }
    else if (inputTypeValue === "Daam" && resultTypeValue ==="Paisa") {
        result.value = Number(input.value) *4;
    } 
    else if (inputTypeValue === "Daam" && resultTypeValue ==="Bigha") {
        result.value = "N/A";
    } 
    else if (inputTypeValue === "Daam" && resultTypeValue ==="Kattha") {
        result.value = "N/A";
    } 
    else if (inputTypeValue === "Daam" && resultTypeValue ==="Dhur") {
        result.value = Number(input.value) *0.11737;
    } 
    else if (inputTypeValue === "Daam" && resultTypeValue ==="SqFeet") {
        result.value = Number(input.value) *21.39 ;
    }
    //Bigha
    if (inputTypeValue === "Bigha" && resultTypeValue ==="Bigha") {
        result.value = Number(input.value);
    }
    else if (inputTypeValue === "Bigha" && resultTypeValue ==="Ropani") {
        result.value = Number(input.value)*13;
    }
    else if (inputTypeValue === "Bigha" && resultTypeValue ==="Anna") {
        result.value = Number(input.value)*5;
    }
    else if (inputTypeValue === "Bigha" && resultTypeValue ==="Paisa") {
        result.value = Number(input.value)*318.14;
    } 
    else if (inputTypeValue === "Bigha" && resultTypeValue ==="Dam") {
        result.value = Number(input.value) *0.66;
    } 
    else if (inputTypeValue === "Bigha" && resultTypeValue ==="Kattha") {
        result.value = Number(input.value) *20;
    } 
    else if (inputTypeValue === "Bigha" && resultTypeValue ==="Dhur") {
        result.value = Number(input.value) *40;
    } 
    else if (inputTypeValue === "Bigha" && resultTypeValue ==="SqFeet") {
        result.value = Number(input.value) *72900 ;
    }
     //Kattha
     if (inputTypeValue === "Kattha" && resultTypeValue ==="Kattha") {
        result.value = Number(input.value);
    }
    else if (inputTypeValue === "Kattha" && resultTypeValue ==="Ropani") {
        result.value = Number(input.value)/1.5;
    }
    else if (inputTypeValue === "Kattha" && resultTypeValue ==="Anna") {
        result.value = Number(input.value)*8.41;
    }
    else if (inputTypeValue === "Kattha" && resultTypeValue ==="Paisa") {
        result.value = Number(input.value)*318.14;
    } 
    else if (inputTypeValue === "Kattha" && resultTypeValue ==="Dam") {
        result.value = Number(input.value) *0.66;
    } 
    else if (inputTypeValue === "Kattha" && resultTypeValue ==="Bigha") {
        result.value = Number(input.value) *0.05 ;
    } 
    else if (inputTypeValue === "Kattha" && resultTypeValue ==="Dhur") {
        result.value = Number(input.value) *20;
    } 
    else if (inputTypeValue === "Kattha" && resultTypeValue ==="SqFeet") {
        result.value = Number(input.value) *1361 ;
    }

    //sqfeet
    if (inputTypeValue === "SqFeet" && resultTypeValue ==="SqFeet") {
        result.value = Number(input.value);
    }
    else if (inputTypeValue === "SqFeet" && resultTypeValue ==="Ropani") {
        result.value = Number(input.value)/5476;
    }
    else if (inputTypeValue === "SqFeet" && resultTypeValue ==="Anna") {
        result.value = Number(input.value)/342.25;
    }
    else if (inputTypeValue === "SqFeet" && resultTypeValue ==="Paisa") {
        result.value = Number(input.value)/85.56 ;
    } 
    else if (inputTypeValue === "SqFeet" && resultTypeValue ==="Dam") {
        result.value = Number(input.value) /21.39;
    } 
    else if (inputTypeValue === "SqFeet" && resultTypeValue ==="Bigha") {
        result.value = Number(input.value) /72900 ;
    } 
    else if (inputTypeValue === "SqFeet" && resultTypeValue ==="Dhur") {
        result.value = Number(input.value) /68.0625;
    } 
    else if (inputTypeValue === "SqFeet" && resultTypeValue ==="Kattha") {
        result.value = Number(input.value) /1361 ;
    }
}
