window.onload = function(){
    document.getElementById('update').addEventListener('click',verif)
}

function verif(){
    const form = document.getElementById('updating');
    form.submit();

}