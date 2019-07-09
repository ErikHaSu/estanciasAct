/*var xhr = new XMLHttpRequest();
    xhr.open('GET','genero.php');
    xhr.onload = function(){
    if(xhr.status === 200){
        var json = JSON.parse(xhr.responseText);
        var data = [{
            values: [json.masculino, json.femenino],
            labels: ['Masculino', 'Femenino'],
            type: 'pie'
        }];
        
        var layout = {
            title: 'Grafica de generos',
            height: 400,
            width: 500
        };
        
            Plotly.newPlot('genero', data, layout);
        }else{
        console.log("error"+xhr.status);
    }
}
xhr.send();
*/
$(function(){
    var ajax = $.ajax({
        data: {},
        url: 'genero.php',
        type: 'POST',
        success: function(response) {
            var datos = JSON.parse(response);
            var data = [{
                values: [datos.masculino, datos.femenino],
                labels: ['Masculino', 'Femenino'],
                type: 'pie'
            }];
            
            var layout = {
                //title: 'Grafica de generos',
                height: 400,
                width: 500
            };
            
                Plotly.newPlot('genero', data, layout);
        },
        error: function(response,status,error) {
            alert("Datos no encontrados o error en la conexion")
        }

    })
})