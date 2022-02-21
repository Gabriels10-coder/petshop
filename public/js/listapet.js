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
            section.appendChild(createidade)
        });
    },
});
