document.addEventListener('DOMContentLoaded', function() {

    let formulario = document.querySelector("#formularioCalendario");

    var calendarEl = document.getElementById('calendario');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale: 'es',
      displayEventTime: false,

        headerToolbar:{
            left: 'prev,next',
            center: 'title',
            right: 'today',
        },

        //events: baseURL+"/calendario/mostrar",

        eventSources:{
            url: baseURL+"/calendario/mostrar",
            method:"POST",
            extraParams: {
                _token: formulario._token.value,
            }
        },
        

        dateClick:function(info){
            formulario.reset();
            formulario.start.value=info.dateStr;
            formulario.end.value=info.dateStr;
            $("#agenda").modal("show");
        },

        eventClick:function (info){
            var calendario=info.event;
            console.log(calendario);

            axios.post(baseURL+"/calendario/editar/"+info.event.id).
        then(
            (respuesta)=>{
                formulario.id.value= respuesta.data.id;
                formulario.title.value=respuesta.data.title;
                formulario.descripcion.value= respuesta.data.descripcion;
                formulario.start.value= respuesta.data.start;
                formulario.end.value= respuesta.data.end;
            $("#agenda").modal("show");
        }).catch(
            error=>{
                if(error.response){
                    console.log(error.response.data);
                }
            })
        }
        
    });
    calendar.render();

    document.getElementById("btnSave").addEventListener("click", function(){
        
        enviarDatos("/calendario/agregar");

    });

    document.getElementById("btnDelete").addEventListener("click", function(){

        enviarDatos("/calendario/borrar/"+formulario.id.value);

    });

    document.getElementById("btnEdit").addEventListener("click", function(){

        enviarDatos("/calendario/actualizar/"+formulario.id.value);

    });

    function enviarDatos(url){
        const datos= new FormData(formulario);

        const nuevaURL = baseURL+url;

        axios.post(nuevaURL, datos).
        then(
            (respuesta)=>{
            calendar.refetchEvents();
            $("#agenda").modal("hide");
        }).catch(
            error=>{
                if(error.response){
                    console.log(error.response.data);
                }
            })
    }

 
  });