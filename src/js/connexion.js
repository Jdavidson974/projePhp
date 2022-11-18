window.onload = function(){
    document.getElementById('log').addEventListener('click',verif)
}

function verif(){
    const form = document.getElementById('connexion');
    form.submit();

}