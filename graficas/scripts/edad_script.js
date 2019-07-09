/*var xhr = new XMLHttpRequest();
xhr.open('GET','edad.php');
xhr.onload = function(){
    if(xhr.status === 200){
        var json = JSON.parse(xhr.responseText);
        var data = [
            {
                x: ['7 años', '8 años', '9 años','10 años','11 años','12 años'],
                y: [json.siete, json.ocho, json.nueve, json.diez, json.once, json.doce],
                type: 'bar'
            }
        ];

    Plotly.newPlot('edad', data); 
        }else{
        console.log("error" + xhr.status);
    }
}
xhr.send();*/
$(function(){
    var ajax = $.ajax({
        data: {},
        url: 'edad.php',
        type: 'POST',
        success: function(response) {
            var datos = JSON.parse(response);
            var data = [
                {
                    x: ['7 años', '8 años', '9 años','10 años','11 años','12 años'],
                    y: [datos.siete, datos.ocho, datos.nueve, datos.diez, datos.once, datos.doce],
                    type: 'bar'
                }
            ];
    
        Plotly.newPlot('edad', data);
        },
        error: function(response,status,error) {
            alert("Datos no encontrados o error en la conexion")
        }

    })
})


