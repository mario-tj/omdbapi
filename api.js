;$(function(){


$("button#btnBuscar").on('click', function(event) {
	event.preventDefault();
	var _input = $("input#txt-buscar");
	 var _value = $.trim(_input.val());
	 if (_value !=='') {
		$.ajax({
			url: 'http://www.omdbapi.com/?t='+_value+'&y=&plot=short&r=json',
			type: 'GET',
			dataType: 'json'
		})
		.done(function(response) {

			if (response.Response==="True") {
			    var _html = Util._handlebar_load_template("#api-template", response);
	            $(".contenedor-api").append(_html)
	            }else{
	            	alert("pelicula no encontrada")
	            }
	            
	       _input.focus(); 
	       _input.val('')    

		})
		.fail(function(response) {
			console.log(response);
		}); 	
	 };
	
	 
});






});


var Util ={   
		_handlebar_load_template: function (_template_identifier, _data) {

	        var _source = $.trim($(_template_identifier).html());
	        var _template = Handlebars.compile(_source);
	        return _template(_data);

	    }
    } 