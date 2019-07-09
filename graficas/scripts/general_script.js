/*var xhr = new XMLHttpRequest();
    xhr.open('GET','general.php');
    xhr.onload = function(){
    if(xhr.status === 200){
        var json = JSON.parse(xhr.responseText);
        var data = [{
            values: [json.promedio1,json.promedio2,json.promedio3],
            labels: ['Actividad1', 'Actividad2','Actividad3'],
            type: 'pie'
          }];
          
          var layout = {
              title: 'Grafica de puntaje general',
              height: 400,
              width: 500
          };
          
          Plotly.newPlot('general', data, layout);
        }else{
        console.log("error"+xhr.status);
    }
}
xhr.send();*/
$(function(){
    var ajax = $.ajax({
        data: {},
        url: 'general.php',
        type: 'POST',
        success: function(response) {
            var datos = JSON.parse(response);
            var data = [{
                values: [datos.promedio1,datos.promedio2,datos.promedio3],
                labels: ['Actividad1', 'Actividad2','Actividad3'],
                type: 'pie'
              }];
              
              var layout = {
                  //title: 'Grafica de puntaje general',
                  height: 400,
                  width: 500
              };
              
              Plotly.newPlot('general', data, layout);
        },
        error: function(response,status,error) {
            alert("Datos no encontrados o error en la conexion")
        }

    })
})
