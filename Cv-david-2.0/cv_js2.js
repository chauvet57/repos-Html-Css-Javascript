/**
 * declaration des events de la page html
 */
let telCv = document.getElementById("tel");
telCv.addEventListener("click", function () { affichenumero() });
let mailCv = document.getElementById("email");
mailCv.addEventListener("click", function () { openMailer() });

let twitterCv = document.getElementById("twitter");
twitterCv.addEventListener("click", function() { twittercv() } );
let twitterCv2 = document.getElementById("twitter2");
twitterCv2.addEventListener("click", function() { twittercv() } );
let githubCv = document.getElementById("github");
githubCv.addEventListener("click", function() { githubcv() } );
let githubCv2 = document.getElementById("github2");
githubCv2.addEventListener("click", function() { githubcv() } );
let facebookCv = document.getElementById("facebook");
facebookCv.addEventListener("click", function() { facebookcv() });
let facebookCv2 = document.getElementById("facebook2");
facebookCv2.addEventListener("click", function() { facebookcv() });
let linkedlnCv = document.getElementById("linkedln");
linkedlnCv.addEventListener("click", function() { linkedlncv() });
let linkedlnCv2 = document.getElementById("linkedln2");
linkedlnCv2.addEventListener("click", function() { linkedlncv() });
let instagramCv = document.getElementById("instagram");
instagramCv.addEventListener("click", function() { instragramcv() });
let instagramCv2 = document.getElementById("instagram2");
instagramCv2.addEventListener("click", function() { instragramcv() });
let discordCv = document.getElementById("discord");
discordCv.addEventListener("click", function() { discordcv() });
let discordCv2 = document.getElementById("discord2");
discordCv2.addEventListener("click", function() { discordcv() });
let cvPdf = document.getElementById("cvPdf");
cvPdf.addEventListener("click", function() { pdfcv() })


function twittercv() {
    document.getElementById("twitter").href = "https://twitter.com/anima57c";
    document.getElementById("twitter2").href = "https://twitter.com/anima57c";
}
function githubcv() {
    document.getElementById("github").href = "https://github.com/chauvet57";
    document.getElementById("github2").href = "https://github.com/chauvet57";
}
function facebookcv() {
    document.getElementById("facebook").href = "https://www.facebook.com/david.chauvet.391";
    document.getElementById("facebook2").href = "https://www.facebook.com/david.chauvet.391";
}
function linkedlncv() {
    document.getElementById("linkedln").href = "https://www.linkedin.com/in/david-chauvet-500764193/";
    document.getElementById("linkedln2").href = "https://www.linkedin.com/in/david-chauvet-500764193/";
}
function instragramcv() {
    document.getElementById("instagram").href = "https://www.instagram.com/chauvet_david/?hl=fr";
    document.getElementById("instagram2").href = "https://www.instagram.com/chauvet_david/?hl=fr";
}
function discordcv() {
    document.getElementById("discord").href = "https://discord.gg/VJKfY9";
    document.getElementById("discord2").href = "https://discord.gg/VJKfY9";
}
function pdfcv(){
    document.getElementById("cvPdf").href = "./contact/cv CDA.pdf";
}

/**
 * @function affichenumero()
 * génére dynamiquement un span avec le numéro de tel (non-visible coté html)
 */
function affichenumero() {
   
    document.getElementById("tel").style.display = "none"

    let sectionTel = document.getElementById("telAffichage");
    let spanTel = document.createElement("span");
    spanTel.id = "spanTel"
    spanTel.innerText = "06.15.14.67.37";
    sectionTel.appendChild(spanTel);
    document.getElementById("telAffichage").style.display = "block";
    CloseTel()
};
/**
 * @function CloseTel()
 * destruction du span  apres 4s de visibilité et fait réapparaitre l'event click pour affichage du tel
 */
function CloseTel() {

    setTimeout(function () { 
        document.getElementById("spanTel").remove(); 
    document.getElementById("tel").style.display = "block";
}, 4000);
}

/**
 * @function openMailer()
 * permet de cacher l'adresse mail coté html
 * hachage de l'adresse mail en parti non repairable des bots 
 */
function openMailer() {
    var part1 = "chauvet";
    var part2 = Math.pow(2, 6);
    var part3 = String.fromCharCode(part2);
    var part4 = "gmail.com";
    var part6 = "david57";
    var part5 = part1 + "." + part6 + String.fromCharCode(part2) + part4;
    document.getElementById("email").href = "mai" + "lto" + ":"
        + part5 + ">" + part1 + part6 + part3 + part4;

};


$(document).ready(function () {
    $('.js-scrollTo').on('click', function () { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 1000; // Durée de l'animation (en ms)
        $('html, body').animate({ scrollTop: $(page).offset().top }, speed); // Go
        return false;
    });
});

