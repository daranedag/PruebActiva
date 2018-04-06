$(document).ready(function(){
	//Se crea el grafico vacío para mostrarlo al cargar la pagina
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
	    type: 'bar',
	    data: {
	        labels: ["Amabilidad", "Calidad", "Eficiencia", "Seguridad"],
	        datasets: [{
	            label: 'Neta',
	            data: [0,0,0,0],
	            type: 'line',
	        	fill: false
	        },{
	            label: 'Satisfacción',
	            data: [0,0,0,0],
	            
	        },{
	            label: 'Insatisfacción',
	            data: [0,0,0,0],
	        }]
	    },
	    options: {
	        scales: {
	        	xAxes: [{
			        stacked: true
		      	}],
	            yAxes: [{
	                ticks: {
	                    beginAtZero: true
	                },
	                stacked: true
	            }]
	        }
	    }
	});

	$('#botonBuscar').click(function(){		
		var opt = $('#selectTiendas').val();
		if(opt==-1){
			alert("Debe seleccionar una tienda");
		}
		else{
			var ajaxurl = 'graficos.php'
			data ={'tienda': opt};
			$.post(ajaxurl, data, function (response){				
				var sale = JSON.parse(response);
				/*Se elimina el grafico y se crea uno nuevo con los datos actualizados para graficarlos*/
				$('#myChart').remove();
				$('#contenedor').append('<canvas id="myChart" style="display: block"><canvas>');
				canvas = document.querySelector('#myChart');
				ctx = canvas.getContext('2d');
				var myChart = new Chart(ctx, {
				    type: 'bar',
				    data: {
				        labels: [sale[0][0], sale[1][0], sale[2][0], sale[3][0]],
				        datasets: [{
				            label: 'Neta',
				            data: [sale[0][4], sale[1][4], sale[2][4], sale[3][4]],
				            type: 'line',
				            borderColor: 'black',
				        	fill: false
				        },{
				            label: 'Satisfacción',
				            data: [sale[0][2], sale[1][2], sale[2][2], sale[3][2]],
				            backgroundColor: [
        						'rgba(0, 255, 50, 0.5)',
        						'rgba(0, 255, 50, 0.5)',
        						'rgba(0, 255, 50, 0.5)',
        						'rgba(0, 255, 50, 0.5)',
    						]
				        },{
				            label: 'Insatisfacción',
				            data: [sale[0][3], sale[1][3], sale[2][3], sale[3][3]],
				            backgroundColor: [
        						'rgba(255, 0, 0, 0.5)',
        						'rgba(255, 0, 0, 0.5)',
        						'rgba(255, 0, 0, 0.5)',
        						'rgba(255, 0, 0, 0.5)',
    						]
				        }]
				    },
				    options: {
				        scales: {
				        	xAxes: [{
						        stacked: true
					      	}],
				            yAxes: [{
				                ticks: {
				                    beginAtZero: true
				                },
				                stacked: true
				            }]
				        }
				    }
				});

				//Procesar datos de tabla
				/*Se elimina la tabla y se crea una nueva con los datos actualizados*/
				$('#myTable').remove();
				$('#contenedorTabla').append('<table class="table table-striped table-responsive" id="myTable"><tr><th>Atributo</th><th>Base</th><th>Notas 6+7</th><th>Notas 1 a 4</th><th>Neta</th></tr>');
				for (var i = 0; i < sale.length; i++) {
					var nuevafila = "<tr>";
					for (var j = 0; j < sale[i].length; j++) {
						if(j==2 || j==3 || j==4){
							nuevafila += "<td>"+sale[i][j]+"%</td>";		
						}
						else{
							nuevafila += "<td>"+sale[i][j]+"</td>";	
						}						
					}
					nuevafila+="</tr>";
					$("#myTable").append(nuevafila);
				}
				$("#myTable").append("</table>")
			});
		}
	});
});