//função para validar os campos de cadastro
function validacaoPets() {
    //Aqui pego os valores dos inputs
    let nomeanimal = document.getElementById("nomeanimal").value;
    let raca = document.getElementById("raca").value;
    let peso = document.getElementById("peso").value;
    let idade = document.getElementById("idade").value;
    let dono = document.getElementById("dono").value;
    //-----------FIM------------//
    //pego os campos da validação
    let validanome = document.getElementById("validanome");
    let validaraca = document.getElementById("validaraca");
    let validapeso = document.getElementById("validapeso");
    //-----------FIM------------//
    //button submit
    let btn = document.getElementById("btn-submit");
    //-----------FIM------------//
    //Verifico o campo vazio e retorno msg de campo obrigatório
    //verifico se nome está vazio
    if (nomeanimal == "") {
        validanome.innerText = "Campo obrigatório";
        validanome.style.color = "#ff0000";
        btn.disabled = true;
        return;
    }
    //-----------FIM------------//
    //verifico se a raça está vazia
    if (raca == "") {
        validaraca.innerText = "Campo obrigatório";
        validaraca.style.color = "#ff0000";
        btn.disabled = true;
        return;
        //-----------FIM------------//
    }
    //verifico se o peso está vazio
    if (peso == "") {
        validapeso.innerText = "Campo obrigatório";
        validapeso.style.color = "#ff0000";
        btn.disabled = true;
        return;
    } else {
        validanome.innerText = "";
        validaraca.innerText = "";
        validapeso.innerText="";
        btn.disabled = false;
    }
}
