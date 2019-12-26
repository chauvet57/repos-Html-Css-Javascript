<form>
  <p>
    <fieldset>
      <legend>Qualité<abbr title="Ce champ est obligatoire">*</abbr></legend>
      <input type="radio" required name="title" id="r1" value="Mr"><label for="r1">M.</label>
      <input type="radio" required name="title" id="r2" value="Ms"><label for="r2">Mme.</label>
    </fieldset>
  </p>
  <p>
    <label for="n1">Quel est votre âge ?</label>
    <!-- L'attribut pattern peut servir de recours pour les navigateurs dont le type number n'est
         pas implémenté pour input mais qui prennent en charge l'attribut pattern. Veuillez noter
         que les navigateurs prenant en charge l'attribut pattern ne signalent pas d'erreur quand
         il est utilisé avec un champ number. Seule son utilisation ici agit en tant que recours. -->
    <input type="number" min="12" max="120" step="1" id="n1" name="age"
           pattern="\d+">
  </p>
  <p>
    <label for="t1">Quel est votre fruit favori ?<abbr title="Ce champ est obligatoire">*</abbr></label>
    <input type="text" id="t1" name="fruit" list="l1" required
           pattern="[Bb]anane|[Cc]erise|[Cc]itron|[Ff]raise|[Oo]range|[Pp]omme">
    <datalist id="l1">
      <option>Banane</option>
      <option>Cerise</option>
      <option>Citron</option>
      <option>Fraise</option>
      <option>Orange</option>
      <option>Pomme</option>
    </datalist>
  </p>
  <p>
    <label for="t2">Quelle est votre adresse électronique ?</label>
    <input type="email" id="t2" name="email">
  </p>
  <p>
    <label for="t3">Laissez un court message</label>
    <textarea id="t3" name="msg" maxlength="140" rows="5"></textarea>
  </p>
  <p>
    <button>Soumettre</button>
  </p>
</form>



<form novalidate>
  <p>
    <label for="mail">
      <span>Veuillez saisir une adresse e-mail :</span>
      <input type="email" id="mail" name="mail">
      <span class="error" aria-live="polite"></span>
    </label>
  <p>
  <button>Envoyer</button>
</form>


<script>


// Il y a plusieurs façon de sélectionner un nœud DOM ; ici on récupère
// le formulaire et le champ d'e-mail ainsi que l'élément span
// dans lequel on placera le message d'erreur

var form  = document.getElementsByTagName('form')[0];
var email = document.getElementById('mail');
var error = document.querySelector('.error');

email.addEventListener("input", function (event) {
  // Chaque fois que l'utilisateur saisit quelque chose
  // on vérifie la validité du champ e-mail.
  if (email.validity.valid) {
    // S'il y a un message d'erreur affiché et que le champ
    // est valide, on retire l'erreur
    error.innerHTML = ""; // On réinitialise le contenu
    error.className = "error"; // On réinitialise l'état visuel du message
  }
}, false);
form.addEventListener("submit", function (event) {
  // Chaque fois que l'utilisateur tente d'envoyer les données
  // on vérifie que le champ email est valide.
  if (!email.validity.valid) {
    
    // S'il est invalide, on affiche un message d'erreur personnalisé
    error.innerHTML = "J'attends une adresse e-mail correcte, mon cher !";
    error.className = "error active";
    // Et on empêche l'envoi des données du formulaire
    event.preventDefault();
  }
}, false);


</script>















<style>
body {
  font: 1em sans-serif;
  padding: 0;
  margin : 0;
}

form {
  max-width: 200px;
}

p * {
  display: block;
}

input[type=email]{
  -webkit-appearance: none;

  width: 100%;
  border: 1px solid #333;
  margin: 0;

  font-family: inherit;
  font-size: 90%;

  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

/* Voici notre composition pour les champs invalides */
input:invalid{
  border-color: #900;
  background-color: #FDD;
}

input:focus:invalid {
  outline: none;
}

/* Voici la mise en forme pour les erreurs */
.error {
  width  : 100%;
  padding: 0;
 
  font-size: 80%;
  color: white;
  background-color: #900;
  border-radius: 0 0 5px 5px;
 
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.error.active {
  padding: 0.3em;
}

</style>