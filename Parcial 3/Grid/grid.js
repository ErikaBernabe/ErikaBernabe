

$(document).ready(()=>{

    const settings = {
        "async": true,
        "crossDomain": true,
        "url": "http://localhost/ErikaBernabe/Parcial%203/Grid/consulta.php",
        "method": "GET",
        "headers": {
          "Accept": "*/*",
          
        }
    };
      
        

   $.ajax(settings).done(function(response){
     let tabla = JSON.parse(response);

    $("#jsGrid").jsGrid({
             width: "100%",
            height: "400px",
        
             inserting: true,
             editing: true,
             sorting: true,
             paging: true,
        
             data: tabla,
        
             fields: [
                 { name: "Id", title:"Id", type: "number", width: 50, validate: "required" },
                 { name: "Nombre",title:"Nombre", type: "varchar", width: 100 },
                 { name: "Genero",title:"Genero", type: "text", width: 100 },
                 { name: "Fecha de su estreno",title:"Fecha de su estreno",width:100},
                 { name: "Duracion",title:"Duracion", width:200 },
                 
             ]
         });

    });

});




