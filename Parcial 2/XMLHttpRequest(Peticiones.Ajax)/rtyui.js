window.onload = function(){
    document.getElementById("btnHola").addEventListener("click", pedirHeader);
    document.getElementById("btnAdios").addEventListener("click", iniciarHeader);

    function pedirHeader(){
        var  solicitud = new XMLHttpRequest(); //Crea el objeto XMLHttpRequest

        solicitud.onreadystatechange = function(){  //En esta propiedad 
            if(solicitud.readyState==4 && solicitud.status==200){
                document.getElementById("MyDiv").innerHTML =solicitud.responseText;
            }

        };
        solicitud.open("GET", "01_cargarArchivo.txt", true);
      solicitud.send();

    }
    
    function iniciarHeader(){
        document.getElementById("MyDiv").innerHTML="<h2>Este es un header nivel 2<h2>"
    }
    

}