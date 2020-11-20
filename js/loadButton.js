class loadButton{

    constructor(this_button){

        this.button = document.querySelector(this_button);
        this.textOld = this.button.innerHTML

    }

    start(){

        this.button.innerHTML = "<div class=\"lds-ellipsis\"><div></div><div></div><div></div><div></div>";
        this.button.setAttribute("disabled", "");
        
    }

    stop(){

        this.button.innerHTML = this.textOld;
        this.button.removeAttribute("disabled");

    }

}