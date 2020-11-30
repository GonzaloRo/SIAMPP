$(function() {
  $.datepicker.regional['es'] = {
    closeText: 'Cerrar',
    prevText: '< Ant',
    nextText: 'Sig >',
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
    var oTable = $('#datatable').DataTable({
      "oLanguage": {
        "sSearch": "Filter Data"
      },
      "bLengthChange": false,
      "iDisplayLength": -1,
      "sPaginationType": "full_numbers",
  
    });
  
  
  
  
    $("#datepicker_from").datepicker({
      showOn: "button",
     
      buttonImageOnly: false,
      "onSelect": function(date) {
        minDateFilter = new Date(date).getTime();
        oTable.fnDraw();
      }
    }).keyup(function() {
      minDateFilter = new Date(this.value).getTime();
      oTable.fnDraw();
    });
  
    $("#datepicker_to").datepicker({
      showOn: "button",
  
      buttonImageOnly: false,
      "onSelect": function(date) {
        maxDateFilter = new Date(date).getTime();
        oTable.fnDraw();
      }
    }).keyup(function() {
      maxDateFilter = new Date(this.value).getTime();
      oTable.fnDraw();
    });
  
  });
  
  // Date range filter
  minDateFilter = " ";
  maxDateFilter = " ";
  
  $.fn.dataTableExt.afnFiltering.push(
    function(oSettings, aData, iDataIndex) {
      if (typeof aData._date == 'undefined') {
        aData._date = new Date(aData[2]).getTime();
      }      
  
      if (minDateFilter && !isNaN(minDateFilter)) {
        if (aData._date < minDateFilter) {
          return false;
        }
      }
  
      if (maxDateFilter && !isNaN(maxDateFilter)) {
        if (aData._date > maxDateFilter) {
          return false;
        }
      }
  
      return true;
    }
  );