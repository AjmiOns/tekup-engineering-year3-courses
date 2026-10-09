//Question 1
function check(){
    let cin=document.getElementById('cin').value; 
    let email=document.getElementById('email').value;

    if(cin=='') alert( "Veuillez remplir le champ CIN");
    if (email=='') alert ("Veuillez remplir le champ email");

    if( cin.length!=8 ) alert ("CIN doit  etre sur 8 caracteres");
    if( isNaN(cin)) alert ("CIN doit etre un chiffre");

    let niveau=document.getElementsByName("niveau"); 
    let spec=document.getElementById("spec").value; 
    if( niveau[0].checked)//niveau==TIC -> on n'a pas de spécialité
    {
        if (spec!="") 
            alert("Spécialité ne doit pas etre précisée");
    }
}

//Question 2
<form onsubmit="check()">...</form>