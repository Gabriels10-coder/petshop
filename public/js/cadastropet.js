//I take the fields to show the message
let validanomeanimal = document.getElementById("validanome");
let validaracaanimal = document.getElementById("validaraca");
let validapesoanimal = document.getElementById("validapeso");
let validaidadeanimal = document.getElementById("validaidade");
let validadonoanimal = document.getElementById("validadono");
//-----------END------------//

//button submit
let btn = document.getElementById("btn-submit");
//-----------END------------//

//Function to validate name
function validanome() {
    //I take the field
    let nomeanimal = document.getElementById("nomeanimal").value;
    //I check if it's empty
    if (nomeanimal == "") {
        validanomeanimal.innerText = "Campo obrigatório";
        btn.disabled = true;
    } else {
        validanomeanimal.innerText = "";
        btn.disabled = false;
    }
}
//-----------END------------//
//function to validate breed
function validaraca() {
    //I take the field
    let raca = document.getElementById("raca").value;
    //I check if it's empty
    if (raca == "") {
        validaracaanimal.innerText = "Campo obrigatório";
        btn.disabled = true;
    } else {
        validaracaanimal.innerText = "";
        btn.disabled = false;
    }
}
//-----------END------------//
//function to validate  weight
function validapeso() {
    // I take the field
    let peso = document.getElementById("peso").value;
    //I check if it's empty
    if (peso == "") {
        validapesoanimal.innerText = "Campo  obrigatório";
        btn.disabled = true;
    } else {
        validapesoanimal.innerText = "";
        btn.disabled = false;
    }
}
//-----------END------------//
//function to validate age
function validaidade() {
    //pegocampo
    let idade = document.getElementById("idade").value;
    //verifico  se idade  é igual 0
    if (parseInt(idade) == 0) {
        validaidadeanimal.innerText = "Por favor coloque uma  idade válida";
        btn.disabled = true;
    } else {
        validaidadeanimal.innerText = "";
        btn.disabled = false;
    }
}
//-----------END------------//
//function to validate owner
function validadono() {
    let dono = document.getElementById("dono").value;
    if (dono == "") {
        validadonoanimal.innerText = "Campo obrigatório";
        btn.disabled = true;
    } else {
        validadonoanimal.innerText = "";
        btn.disabled = false;
    }
}
//-----------END------------//
