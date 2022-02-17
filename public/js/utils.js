function validacaoPets() {
    //objeto  para pegar valores dos inputs

    let inputs = {
        nomeanimal: document.getElementById("nomeanimal").value,
        raca: document.getElementById("raca").value,
        peso: document.getElementById("peso").value,
        idade: document.getElementById("idade").value,
        dono: document.getElementById("dono").value,
    };
    let tamanhonome = inputs.nomeanimal.toString().length;
    console.log(tamanhonome);

     if (tamanhonome < 10) {
        document.getElementById("erro1").innerHTML = "teste";
    }else{
        document.getElementById("erro1").innerHTML = "nada";
    }
}
