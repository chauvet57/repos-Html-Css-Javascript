
let telCv = document.getElementById("tel");
telCv.addEventListener("click", function() { affichenumero() })
let mailCv = document.getElementById("email");
mailCv.addEventListener("click", function() { openMailer() })





function decode(a) {
    return a.replace(/[a-zA-Z]/g, function (c) {
        return String.fromCharCode((c <= "Z" ? 90 : 122) >= (c = c.charCodeAt(0) + 13)
            ? c : c - 26);
    })
};

function openMailer(element) {
    var y = decode("znvygb:punhirg.qnivq57@tznvy.pbz");
    element.setAttribute("href", y);
    element.setAttribute("onclick", "");
    element.firstChild.nodeValue = "Ouvrir l'application de messagerie";
};


function affichenumero() {
    var numero = ajaxRequest('../Cv_David_CHAUVET/contact/telephone.txt');
    document.getElementById('tel').innerHTML = numero;
}

function ajaxRequest(url, type, params) {
    if (type === undefined) var type = 'GET';
    if (type == 'GET') params = null;
    var http = new XMLHttpRequest();
    http.open(type, url, false);
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    http.onreadystatechange = function () { if (http.readyState == 4 && http.status == 200) ajaxResponse = http.responseText; };
    http.send(params);
    return ajaxResponse;
}
