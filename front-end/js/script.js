// inputs 
var nom = document.getElementById('nom');
var email = document.getElementById('email');
var tel = document.getElementById('tel');
var msg = document.getElementById('msg');

// form
var form = document.getElementById('form');

// validation colors
const green = '#4CAF50';
const red = '#F44336';

document.getElementById("btn").addEventListener("click",function (event)
{
    // ValidateName();
    // ValidateEmail();
    // ValidateTel();
    // ValidateMsg();
    if(ValidateName(nom) && ValidateEmail(email) && ValidateMsg(msg) && ValidateTel(tel)  ){
      return true;
    }else {
        event.preventDefault();

    }


});


//validate functs
function ValidateName() {
    //check if it is empty
    if (checkifempty(nom)) return;
    //if it has only letters
    if (!checkIfOnlyLetters(nom)) return;
    return true;
}

function ValidateEmail() {
    //check if it is empty
    if (checkifempty(email)) return;
    //if it has only letters
    if (!isEmailAddress(email)) return;
    return true;
}


function ValidateTel() {
    //check if it is empty
    if (checkifempty(tel)) return;
    if (!isPhone(tel)) return;
    return true;
}
function ValidateMsg() {
    //check if it is empty
    if (checkifempty(msg)) return;
     //if it has only letters
     if (!checkIfOnlyLetters(msg)) return;
     return true;
  
}



//Utility fcts

function checkifempty (filed) {

    if (isEmpty(filed.value.trim())){
        // set invalid
        setInvalid(filed, `${filed.name} ne doit pas être vide`);   
        return true;

    }else{
        //set valid 
        setInvalid(filed);
        return false;
    }

  }

  function isEmpty (value) {
      if(value ==='') return true;
      return false;
  }


function setInvalid(filed, message) {
    filed.className = 'invalid';
    filed.nextElementSibling.innerHTML = message;
    filed.nextElementSibling.style.color = red;

}


function setValid(filed) {
    filed.className = 'valid';
    filed.nextElementSibling.innerHTML = '';
    // filed.nextElementSibling.style.color = green;

}

function checkIfOnlyLetters(filed) {
    if (/^[a-zA-Z ]+$/.test(filed.value)) {
        setValid(filed);
        return true;
    } else {
        setInvalid(filed, `${filed.name} Must contain only lettres ! `);
        return false;
    }
}


function isEmailAddress(filed) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(filed.value)) {
        setValid(filed);
        return true;
    } else {
        setInvalid(filed, `${filed.name} mail not valid`);
        return false;
    }
}

function isPhone(filed) {
    if (/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/.test(filed.value)) {
        setValid(filed);
        return true;
    } else {
        setInvalid(filed, `${filed.name} mail not valid`);
        return false;
    }
}


