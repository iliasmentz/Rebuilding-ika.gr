function checkInp(){
    var flag=0;
    var x=document.forms["myForm"]["AMKA"].value;
    if (isNaN(x))
    {
        document.getElementById('AMKA').placeholder = "Το AMKA πρέπει να είναι αριθμός";
        document.getElementById('AMKA').value = "";
        document.getElementById('AMKA').style.borderColor='red';
        flag=flag+1;
    }else if(x.length>14){
        document.getElementById('AMKA').placeholder = "Το AMKA είναι μέχρι 14 αριθμούς";
        document.getElementById('AMKA').value = "";
        document.getElementById('AMKA').style.borderColor='red';
        flag=flag+1;
    }
    var x=document.forms["myForm"]["AFM"].value;
    if (isNaN(x))
    {
        document.getElementById('AFM').placeholder = "Το ΑΦΜ πρέπει να είναι αριθμός";
        document.getElementById('AFM').value = "";
        document.getElementById('AFM').style.borderColor='red';
        flag=flag+1;
    }else if(x.length>10){
        document.getElementById('AFM').placeholder = "Το ΑΦΜ είναι μέχρι 10 αριθμούς";
        document.getElementById('AFM').value = "";
        document.getElementById('AFM').style.borderColor='red';
        flag=flag+1;
    }
    if(flag>0){
        return false;
    }
}

function remobeBorder(input) {
    input.style.removeProperty('border');
}
