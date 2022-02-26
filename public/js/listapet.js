let nome = document.getElementById("nome");
let idade = document.getElementById("idade");
console.log('test')
$.ajax({
    type: "GET",
    url: "http://127.0.0.1:8000/testepet",
    dataType: "json",
    success: (data) => {
        let section = document.getElementById("section");
        let convertido = JSON.parse(data);

        convertido.forEach((element) => {
            let createnome = document.createElement("h1");
            let createidade = document.createElement("h1");
            createnome.innerHTML = element.nome;
            createidade.innerHTML = element.idade;

            section.appendChild(createnome);
            section.appendChild(createidade);
        });
    },
});

$.ajax({
    type: "GET",
    url: "https://viacep.com.br/ws/13323452/json/",
    dataType: "json",
    success: (data) => {
        console.log(data);
        document.getElementById("texto").innerHTML = data.logradouro;
    },
});

//function aprendida pra checkar tudo

function checkatudo(list, btn) {
    //Checkar tudo atráves do button principal
    btn.addEventListener("change", () => {
        for (i = 0; i < list.length; i++) {
            if (btn.checked == true) {
                list[i].checked = true;
            } else {
                list[i].checked = false;
            }
        }
    });

}

//function checkar itens do meio, checka o principal

function check(listButtons, buttonprincipal) {
    for (i = 0; i < listButtons.length; i++) {
        listButtons[i].addEventListener("change", () => {
            for (i = 0; i < listButtons.length; i++) {
                if (listButtons[i].checked == true) {
                    buttonprincipal.checked = true;

                } else if (listButtons[i].checked < 0) {
                    buttonprincipal.checked = false;
                }


            }
        })
    }
}
let lista = document.querySelectorAll("#opcoes");

let botaop = document.querySelector("#tudo");


check(lista, botaop)
checkatudo(lista, botaop);
