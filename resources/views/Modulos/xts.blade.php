$(document).on("click",".product",function(e){
                    e.preventDefault();
                    var id = $(this).attr("id");
                    $.get("menusadd/"+id+"", function(response){
                    	if(response != '0'){
                    		$("#addregister").empty();
                    		for(i=0;i<response.length; i++){
                            $("#addregister").append("<tr><td>"+ response[i].id +"</td><td>"+ response[i].nombre_platillo +"</td><td>" + response[i].precio_platillo + "</td><td><button class='deleteProduct'>Eliminar</button></td></tr>");
                            }
                    	}
                    });

                    if(id != 0){
                      $("#addregister").append("<tr><td>"+ id +"</td><td><button class='deleteProduct'>Eliminar</button></td></tr>");
                    }
                    $("#addregister" ).on( "click", ".deleteProduct", function(){
                    $(this).parent().parent().remove();
                    });
                  }); 



$(document).ready(function(){
        $("#category").change(function(event){
          var val = $(this).val();
                      //alert (val);
          $.get("menus/"+event.target.value+"",function(response,menu){
            for(i=0;i<response.length; i++){
              $.each(response,function(id,nombre_platillo){
                $("#answer").append("<tr><td>"+id+"</td><td>"+nombre_platillo+"</td></tr>");
              });
            }
                      // if(val == "*"){
                      //   alert("Selecciona una categoria");
                      // }
                     // else{
                        // $.get("menus/"+event.target.value+"",function(response,menu){
                        // if(response != '0'){
                        //   $("#answer").empty();
                        //   for(i=0;i<response.length; i++){
                        //     $("#answer").append("<thead><tr><th>Identificador</th><th>Nombre</th><th>Precio</th><th>Accion</th></tr></thead><tr><td>"+ response[i].id +"</td><td>"+ response[i].nombre_platillo +"</td><td>" + response[i].precio_platillo + "</td><td><button class='product' id='"+response[i].id+"'>Agregar</button></td></tr>");
                        //     }
                        //   }
                        // });
                    //}
                      
          });
      });