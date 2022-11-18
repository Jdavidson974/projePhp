window.onload = function(){
    document.getElementById('create').addEventListener('click',verif)
}

function verif(){
    const form = document.getElementById('creating');
    form.submit();

}