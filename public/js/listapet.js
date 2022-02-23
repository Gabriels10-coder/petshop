let nome = document.getElementById("nome");
let idade = document.getElementById("idade");

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
    btn.addEventListener("change", () => {
        for (i = 0; i < list.length; i++) {
            if (btn.checked == true) {
                list[i].checked = true;

            } else if (list[i].checked == true) {
                btn.checked = false
            } else if (btn.checked == false) {
                list[i].checked = false;
            }

        }
    });
}

let botaop = document.getElementById("tudo");
let lista = document.querySelectorAll("#opcoes");


checkatudo(lista, botaop);