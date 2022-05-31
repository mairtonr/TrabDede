/* NÃO MEXA NO MEU JS >:( */
function verifiquenome() {
    let vnome = document.forms["form"][" fnome"].value

    if (vnome == "") {
        alert ("O email é obrigatorio")
    }

}

function verifiquenome() {
    let vnome = document.forms["form"]["fnome"].value

    if (vnome == "") {
        alert ("O email é obrigatorio")
    }
}

function mascaratel(mascarainput) {
    const tamanho = document.getElementById('tel').maxLength
    let tel = document.getElementById('tel').value
    console.log(tamanho)

    const mascara = {

        tele : tel.replace(/[^\d]/g,"").replace(/^(\d{2})(\d{1})(\d{4})(\d{4}).*/, '($1)$2$3-$4')

    };

    if (tel.length == tamanho) {
        document.getElementById('tel').value = mascara[mascarainput]
    }


}

window.revelar = ScrollReveal({reset: true})

revelar.reveal('.onlyAbout', {
    duration: 2500

})
/* 
revelar.reveal('.service', {
    duration: 2500

})
  */

window.revelar = ScrollReveal({reset: true})
/* 
revelar.reveal('.onlyAbout', {
    duration: 2500

})
 */
revelar.reveal('.service', {
    duration: 2500

})