$(function($){
	$.datepicker.regional['es'] = {
		closeText: 'Cerrar',
		prevText: '<Ant',
		nextText: 'Sig>',
		currentText: 'Hoy',
		monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
		monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
		dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
		dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
		dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
		weekHeader: 'Sm',
		dateFormat: 'dd/mm/yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''
	};
	$.datepicker.setDefaults($.datepicker.regional['es']);
});


$(function() {
	var dates = $( "#obs_fh_alarma").datepicker({
		changeMonth: true,
		changeYear: true,
		numberOfMonths: 2,
		dateFormat : 'dd/mm/yy',
		maxDate: '1Y', minDate: 0,
		showButtonPanel : true
//		onSelect: function( selectedDate ) {
//			var option = this.id == "from" ? "minDate" : "maxDate",
//			instance = $( this ).data( "datepicker" ),
//			date = $.datepicker.parseDate( instance.settings.dateFormat ||	$.datepicker._defaults.dateFormat,
//			selectedDate, instance.settings );
//			dates.not( this ).datepicker( "option", option, date );
//		}
	});
});