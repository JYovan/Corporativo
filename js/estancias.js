// JavaScript Document
var cli = window.cli || {};

cli.config = (function(){
	return {
			
			Estancia: function(){
                $(document).on('change', '#Estanciaid', function(e){
					var Estancia = $('#Estanciaid').get(0).value;	           
				   $('#EstanciaElegida').load('EstanciaID',{Estancia:Estancia});               
                 });				 
            },
			
			
			
			
		 }
})(); 