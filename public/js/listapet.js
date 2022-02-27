// async function tablePets() {
//     try {
//         let tbody = document.getElementById("tbody");
//         await $.ajax({
//             type: "GET",
//             url: "http://petshop.test/testepet",
//             responseType: "json",
//             success: (data) => {
//                 let responseconv = JSON.parse(data);
//                 console.log(responseconv);
//                 responseconv.map((element) => {
//                     let linha = document.createElement("tr");
//                     let id = document.createElement("td");
//                     let nome = document.createElement("td");
//                     let idade = document.createElement("td");
//                     let raça = document.createElement("td");
//                     let peso = document.createElement("td");
//                     let dono = document.createElement("td");
//                     let deletar = document.createElement("button");
//                     id.innerText = element.id;
//                     nome.innerText = element.nome;
//                     idade.innerText = element.idade;
//                     raça.innerText = element.raça;
//                     peso.innerText = element.peso;
//                     dono.innerText = element.dono;
//                     linha.append(id)
//                     linha.append(nome);
//                     linha.append(idade);
//                     linha.append(raça);
//                     linha.append(peso);
//                     linha.append(dono);

//                     tbody.append(linha);
//                 });
//             },
//         });
//     } catch (err) {
//         console.log(
//             err.statusText === "Not Found" ? "Rota não encontrada" : ""
//         );
//     }
// }
// tablePets();
