function remobeBorder(input) {
    input.style.removeProperty('border');
}

function checkAddress(checkbox)
{
    if (checkbox.checked)
    {
        document.getElementById("safe_info").style.display="block";
    }
    else
    {
        document.getElementById("safe_info").style.display="none";
    }
}
function checkBoss(checkbox)
{
    if (checkbox.checked)
    {
        document.getElementById("boss_info").style.display="block";
    }
    else
    {
        document.getElementById("boss_info").style.display="none";
    }
}

function checkInp()
{
    var flag=0;
    var email=document.forms["myForm"]["Email"].value;
    if(!email.includes("@")){
        document.getElementById('inputEmail').placeholder = "Τo email δεν είναι σωστό";
        document.getElementById('inputEmail').value = "";
        document.getElementById('inputEmail').style.borderColor='red';
        flag=flag+1;
    }else if(email.length>60){
        document.getElementById('inputEmail').placeholder = "Το email είναι μεγάλο";
        document.getElementById('inputEmail').value = "";
        document.getElementById('inputEmail').style.borderColor='red';
        flag=flag+1;
    }
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
    var x=document.forms["myForm"]["DOY"].value;
    if(x.length>60){
        document.getElementById('DOY').placeholder = "Η ΔΟΥ είναι μέχρι 60 χαρακτήρες";
        document.getElementById('DOY').value = "";
        document.getElementById('DOY').style.borderColor='red';
        flag=flag+1;
    }
    var x=document.forms["myForm"]["street"].value;
    if(x.length>100){
        document.getElementById('street').placeholder = "Η οδός είναι μέχρι 100 χαρακτήρες";
        document.getElementById('street').value = "";
        document.getElementById('street').style.borderColor='red';
        flag=flag+1;
    }
    var x=document.forms["myForm"]["Pwd"].value;
    if(x.length>25){
        document.getElementById('inputPassword').placeholder = "Ο κωδικός είναι μέχρι 25 χαρακτήρες";
        document.getElementById('inputPassword').value = "";
        document.getElementById('inputPassword').style.borderColor='red';
        flag=flag+1;
    }
    var x=document.forms["myForm"]["ID"].value;
    if (isNaN(x))
    {
        document.getElementById('ID').placeholder = "To ΑΜΑ πρέπει να είναι αριθμός";
        document.getElementById('ID').value = "";
        document.getElementById('ID').style.borderColor='red';
        flag=flag+1;
    }else if(x.length>10){
        document.getElementById('ID').placeholder = "Το αμα είναι μέχρι 10 χαρακτήρες";
        document.getElementById('ID').value = "";
        document.getElementById('ID').style.borderColor='red';
        flag=flag+1;
    }
    if(flag>0){
        return false;
    }
}
