 
//editar com ajax
// let editar = document.getElementById("editar");


// editar.addEventListener("click", (e) => {
//     e.preventDefault();
//     async function editar() {
//         let id = document.getElementById('id').textContent;
//         let form = document.getElementById("edit-form")
//         let newForm = new FormData(form)
//         try {
//             await $.ajax({
//                 type: "POST",
//                 url: `http://petshop.test/pets/updatepet/${id}`,
//                 data: newForm,
//                 dataType: "JSON",
//                 processData: false,
//                 contentType: false,
//                 cache: false,
//                 success: (response) => {
//                     console.log(response)
//                     if (response.success) {
//                         document.getElementById('retorno').innerText = response.mensagem;
//                         setTimeout(() => {
//                             window.location.href = "http://petshop.test/pets/listapets"
//                         }, 1500);
//                     } else {
//                         document.getElementById('retorno').innerText = response.mensagem;
//                     }
//                 }
//             })
//         } catch (erro) {
//             console.log(erro.statusText);
//         }
//     }
//     editar()
// })
