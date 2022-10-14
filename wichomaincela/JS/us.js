var input = document.getElementsByClassName('input');
for(var i=0; i < input.length; i++){

    input[i].addEventListener('keyup', function(){
        if(this.value.length>=1){
            this.nextElementSibling.classList.add('fij');
        } else{
            this.nextElementSibling.classList.remove('fij');
        }
    })
}
