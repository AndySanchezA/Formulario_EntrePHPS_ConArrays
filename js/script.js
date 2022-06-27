
  const formulario = {
    type: ["text", "text", "number", "number", "submit"],
    name: ["nombre", "cedula", "entrada", "precio", "insertar"],
    placeHolder: [
      "Nombre",
      "Cedula",
      "Entradas",
      "Fechas del Calendario",
      "Enviar Datos",
    ],
    min: ["", "", "1", "1", ""],
    max: ["", "", "", "5", ""],
    etq: [
      "Cliente",
      "Numero de Cedula",
      "Numero de entradas",
      "Ver Ofertas",
      "",
    ],
    class: ["", "", "", "ajax", ""],
    id: ["", "", "", "slide", ""]
    
  };

  let form = document.querySelector("#formulario");
 
  //FUNCIONES
  function cargarFormulario() {
    var html = "";
    for (var i = 0; i < formulario.name.length; i++) {
        if (i==3) {
            html += `
           <div <div    class="${formulario.class[i]}" id="${formulario.id[i]}">     ${formulario.etq[i]}</div> 
            <div id="content" class="div2" ></div></div>
            <input type="${formulario.type[i]}" 
                name="${formulario.name[i]}"
                placeholder="${formulario.placeHolder[i]}"
                min="${formulario.min[i]}"
                max="${formulario.max[i]}"
             
                > 
                `;
        }else{  
            html += `
    <div    class="${formulario.class[i]}" id="${formulario.id[i]}">     ${formulario.etq[i]}</div> 

    <input type="${formulario.type[i]}" 
        name="${formulario.name[i]}"
        placeholder="${formulario.placeHolder[i]}"
        min="${formulario.min[i]}"
        max="${formulario.max[i]}"
     
        > 
        `;  
      }
    
    }
    console.log(html);
    form.innerHTML = html;

   
  }

 
 
  //EVENTOS
  console.log("script_ej6");
  cargarFormulario();

