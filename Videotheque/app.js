let films = [
    { id: 0, name: "Deadpool", years: 2016, authors: "Tim Miller" },
    { id: 1, name: "Spiderman", years: 2002, authors: "Sam Raimi" },
    { id: 2, name: "Scream", years: 1996, authors: "Wes Craven" },
    { id: 3, name: "Armageddon", years: 1998, authors: "Michael Bay" },
    { id: 4, name: "Taxi 1", years: 1998, authors: "Luc Besson" },
    { id: 5, name: "Narnia 1", years: 2005, authors: "Andrew Adamson" },
    { id: 6, name: "Bienvenue chez les Ch'tis", years: 2008, authors: "Dany Boon" },
    { id: 7, name: "Zootopie", years: 2016, authors: "Byron Howard" }

];


/**
 * Genère le tableau film dynamiquement
 */
function generateHTML() {

    let content = `<table id="tableFilm" class="table-striped border">
      <tr >
        <th ><div class="arrow-wrapper">Titre &nbsp; 
        
  <div class="arrow-up" id="trierTitre" onclick="TriUp('name')"></div>
  <div class="arrow-down" id="trierTitre" onclick="TriDown('name')" ></div>
</div></th>
        <th><div class="arrow-wrapper">Année &nbsp;
        
  <div class="arrow-up" id="trierAnnee" onclick="TriUp('year')"></div>
  <div class="arrow-down" id="trierAnnee" onclick="TriDown('year')"></div>
</div></th>
        <th  > <div class="arrow-wrapper">Auteur &nbsp;
       
  <div class="arrow-up" id="trierAuthors" onclick="TriUp('author')"></div>
  <div class="arrow-down" id="trierAuthors" onclick="TriDown('author')"></div>
</div></th>
        <th> Affiche</th>
        <th></th>
        <th></th>
      </tr>`;
    films.forEach(film => {
        getConfig(film.id, film.name, film.years);

        content += "<tr >"
        content += "<td style='width:400px'>" + film.name + "</td>"
        content += "<td style='width:300px'>" + film.years + "</td>"
        content += "<td style='width:400px'>" + film.authors + "</td>"
        content += "<td style='width:180px'><a href='' id='imageFilms" + film.id + "' target='_blank' ><img id='imageFilm" + film.id + "' src='' alt='" + film.name + "' height='154' style='border-radius: 8px ;' /></a></td>"
        content += `<td style='width:250px'><button id="modalButtonEdit` + film.id + `" onclick="editerFilm(` + film.id + `),window.location.href = '#openModalEdit';" class="btn-Modif">Editer</button></td>`
        content += `<td style='width:250px'><button id="btnSupp" onclick="supprimerFilm(` + film.id + `),window.location.href = '#openModalSupp' , CloseAlert();" class="btn-Supp">Supprimer</button></td>`
        content += "</tr>"

    });
    content += "</table>";

    document.getElementById("films").innerHTML = content;
}

/**
 * Faire apparaitre les champs de saisie d'un nouveau film.
 */
function showAdd() {
    document.getElementById("titre").value = "";
    document.getElementById("annee").value = "";
    document.getElementById("auteur").value = "";
    document.getElementById("ajouter1").style.display = "none"
    document.getElementById("AjouterFilm").style.display = "block"
}

/**
 * Faire disparaitre les champs de saisie d'un nouveau film.
 */
function removeAdd() {
    document.getElementById("ajouter1").style.display = "block"
    document.getElementById("AjouterFilm").style.display = "none"
}

/**
 * Sauvegarder le film le tableau 'films'.
 */
function sauvegarderFilm() {
    
    let titre = document.getElementById("titre").value.charAt(0).toUpperCase() + document.getElementById("titre").value.substring(1).toLowerCase();
    let annee = document.getElementById("annee").value;
    let auteur = document.getElementById("auteur").value.charAt(0).toUpperCase() + document.getElementById("auteur").value.substring(1).toLowerCase();

    //removeAdd();
    //("Le film : " + titre + " a été ajouté avec succes");
    films.push({
        id: films.length,
        name: titre,
        years: annee,
        authors: auteur
    });
    generateHTML();
}

/**
 * Supprimer le film dans le tableau 'films'.
 */
function supprimerFilm(id) {

const found = findFilmById(id);
   confirm("Vous confirmez la suppression " + found.name + " ?") 
    
    films = films.filter(item => item.id !== found.id)



    generateHTML();
}

/**
 * editer un film du tableau 'films'.
 */
function editerFilm(id) {

    const found = findFilmById(id);



    // Get the modal
    modalId.value = id;
    modalTitre.value = found.name;
    modalAnnee.value = found.years;
    modalAuteur.value = found.authors;

    var modal = document.getElementById("openModalEdit");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    modal.style.display = "block";

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }


    // When the user clicks on <span> (x), close the modal
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}


/**
 * Permet de modifier un film via un comparaison id et modification des autre valeur.
 */

function modifierFilm() {
   
    // Get the <span> element that closes the modal
    let id = document.getElementById("modalId").value;
    
    films.find(element => {
        if (element.id == id) {
confirm("Vous confirmez la modification " + element.name + " ?") 

            element.name = document.getElementById("modalTitre").value.charAt(0).toUpperCase() + document.getElementById("modalTitre").value.substring(1).toLowerCase();
            element.years = document.getElementById("modalAnnee").value;
            element.authors = document.getElementById("modalAuteur").value.charAt(0).toUpperCase() + document.getElementById("modalAuteur").value.substring(1).toLowerCase();
            return true;
        }
    });

    //modal.style.display = "none";
    generateHTML();
}

/**
 * Fonction de recherche par name, years, authors
 */
function rechercherDansMediatheque() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("inputRechercher");
    console.log(input);
    filter = input.value.toUpperCase();
    table = document.getElementById("tableFilm");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        if (td = tr[i].getElementsByTagName("td")[0]) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else if (td = tr[i].getElementsByTagName("td")[1]) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else if (td = tr[i].getElementsByTagName("td")[2]) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    }
}


/******************
 * SAMPLE URLS
 *
 * 1. To get the config data like image base urls
 * https://api.themiviedb.org/3/configuration?api_key=<APIKEY>
 *
 * 2. To fetch a list of movies based on keyword
 * https://api.themiviedb.org/3/search/movie?api_key=<APIKEY>&query=<keyword>
 *
 * 3. To fetch more details about a movie
 * https://api.themiviedb.org/3/movie/<movie-id>?api_key=<APIKEY>
 *
 ********************/
// const APIKEY is inside key.js


let baseURL = 'https://api.themoviedb.org/3/';
let configData = null;
let baseImageURL = null;



let getConfig = function (filmId, keyMatch, AnneeMatch) {
    let url = "".concat(baseURL, 'configuration?api_key=', APIKEY);
    fetch(url)
        .then((resultat) => {
            return resultat.json();
        })
        .then((data) => {
            baseImageURL = data.images.secure_base_url;
            configData = data.images;


            //console.log('config: ', data);
            //console.log('config fetched');
            runSearch(filmId, keyMatch, AnneeMatch);
            //console.log(filmId, keyMatch,AnneeMatch);

        })
        .catch(function (err) {
            alert(err);
        })
};



let runSearch = function (filmId, keyword, AnneeMatch) {
//initialisation de url pour la recherche de l'affiche et de l'id du film

    let url = ''.concat(baseURL, 'search/movie?api_key=', APIKEY, '&query=', keyword, '&year=', AnneeMatch, '&language=fr-FR');
    fetch(url)
        .then(resultat => resultat.json())
        .then((data) => {
//recup de l'affiche et id
            poster_path = data.results[0].poster_path;
            id = data.results[0].id;
            

// initialisation des nouveaux url francais et anglais pour la recup de la cle video
            let urlVideo = ''.concat('https://api.themoviedb.org/3/movie/' + id + '/videos?api_key=' + APIKEY + '&language=fr-FR');
            let urlVideo2 = ''.concat('https://api.themoviedb.org/3/movie/' + id + '/videos?api_key=' + APIKEY + '&language=en-US');
//url de recup de l'image
            document.getElementById('imageFilm' + filmId).src = baseImageURL + 'w154/' + poster_path;

            fetch(urlVideo)
                .then(resultatVideo => resultatVideo.json())
                .then((dataVideo) => {
//test si il a une video en fr dispo
                    if (dataVideo.results.length >= 1) {
                        video = dataVideo.results[0].key;
                        console.log(dataVideo.results[0]);
                        
                        
                        console.log('Français: ' + video);
                        document.getElementById('imageFilms' + filmId).href = 'http://www.youtube.com/embed/' + video + '?autoplay=1';
                                                
//sinon il va chercher la version us                        
                        
                    } else {
                        fetch(urlVideo2)
                .then(resultatVideo2 => resultatVideo2.json())
                .then((dataVideo2) => {
                    video2 = dataVideo2.results[0].key;
                    
                        console.log('Anglais: ' + video2);
                       document.getElementById('imageFilms' + filmId).href = 'http://www.youtube.com/embed/' + video2 + '?autoplay=1';
                })
                    }
                    
                   
                })
                
        })
        .catch(function (err) {
            alert(err);
        })

};



/**
 * Permet fermer automatiquement le modal générer par le click d'une validation,modification ou d'une suppression (timer a 3s).
 */
function CloseAlert() {

    setTimeout(function () { window.location.href = "#close" }, 3000);
}


/**
 * Permet de trier des film par ordre du votre choix.
 */
function TriUp(el) {

    films.sort(function (a, b) {
        if (el == "name") {
            if (b.name > a.name) {
                if (navigator.vendor === 'Google Inc.') {
                    return -1;
                }
            }
            if (navigator.vendor == '') {
                return (a.name > b.name);
            }
        }
        if (el == "year") {
            if (b.years > a.years) {
                if (navigator.vendor === 'Google Inc.') {
                    return -1;
                }
            }
            if (navigator.vendor == '') {
                return (a.years > b.years);
            }
        }
        if (el == "author") {
            if (b.authors > a.authors) {
                if (navigator.vendor === 'Google Inc.') {
                    return -1;
                }
            }
            if (navigator.vendor == '') {
                return (a.authors > b.authors);
            }

        }
        return 0;
    });
    generateHTML();
}

function TriDown(el) {

    films.sort(function (a, b) {
        if (el == "name") {
            if (b.name < a.name) {
                if (navigator.vendor === 'Google Inc.') {
                    return -1;
                }
            }
            if (navigator.vendor == '') {
                return (a.name < b.name);
            }
        }
        if (el == "year") {
            if (b.years < a.years) {
                if (navigator.vendor === 'Google Inc.') {
                    return -1;
                }
            }
            if (navigator.vendor == '') {
                return (a.years < b.years);
            }
        }
        if (el == "author") {
            if (b.authors < a.authors) {
                if (navigator.vendor === 'Google Inc.') {
                    return -1;
                }
            }
            if (navigator.vendor == '') {
                return (a.authors < b.authors);
            }

        }
        return 0;
    });
    generateHTML();
}

/**
 * Permet de controler si les champs ne sont pas vide.
 * pour l'ajout d'un film
 */

function requisAjout(idTitre, idTAnnee, idAuteur) {

    let BooleanTitre = document.getElementById(idTitre).required;
    let BooleanAnnee = document.getElementById(idTAnnee).required;
    let BooleanAuteur = document.getElementById(idAuteur).required;

    let titre = document.getElementById("titre").value
    let annee = document.getElementById("annee").value
    let auteur = document.getElementById("auteur").value

    if ((titre == "") || (annee == "") || (auteur == "")) { 

    } else {
        confirm("Vous confirmez le nouveau " + titre + " ?")
        sauvegarderFilm(), window.location.href = '#openModalVerif', CloseAlert(), removeAdd();
    }

    if (BooleanTitre == true) {

    }

    if (BooleanAnnee == true) {

    }

    if (BooleanAuteur == true) {

    }
}

/**
 * Permet de controler si les champs ne sont pas vide.
 * pour l'ajout d'un film
 */

function requisModif(idTitre, idTAnnee, idAuteur) {

    let BooleanTitre = document.getElementById(idTitre).required;
    let BooleanAnnee = document.getElementById(idTAnnee).required;
    let BooleanAuteur = document.getElementById(idAuteur).required;

    let titre = document.getElementById("modalTitre").value
    let annee = document.getElementById("modalAnnee").value
    let auteur = document.getElementById("modalAuteur").value

    if ((titre == "") || (annee == "") || (auteur == "")) { 

    } else {
        modifierFilm(), window.location.href = '#openModalModif', CloseAlert();
    }

    if (BooleanTitre == true) {

    }

    if (BooleanAnnee == true) {

    }

    if (BooleanAuteur == true) {

    }
}


/**
 * Permet de recuperer l'annee en cour
 */
function year() {
    new Date().getFullYear();

    return Date;
}

/**
 * Permet de controler et de retourné un objet via sont id
 */

function findFilmById(id) {
    return films.find(element => element.id == id);
}


