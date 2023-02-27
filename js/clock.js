
(function(){
    var hora_fecha = function(){
        var fe = new Date(),
        ho = fe.getHours(),AMPM,
        min = fe.getMinutes(),
        se = fe.getSeconds(),
        DS = fe.getDay(),
        di = fe.getDate(),
        me = fe.getMonth(),
        ye = fe.getFullYear();

        var InputFecha = document.getElementById('textfecha');
        var InputHora_E = document.getElementById('textentrada');
     

        var semana = ['Domingo', 'Lunes', 'Martes','Miercoles', 'Jueves', 'Viernes', 'Sabado']
        var mes = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre']
       
       
        InputFecha.setAttribute("value", semana[DS]+' '+di+' de '+mes[me]+' de '+ye);
        InputFecha.setAttribute("disabled","");


        if (ho >= 12){
            ho = ho -12;
            AMPM = 'PM';
        }else{
            AMPM = 'AM';
        }
        if (ho == 0){
            ho = 12;
        }
        if (min < 10 ){
            min = '0' + min;
        }
        if (se < 10 ){
            se = '0' + se;
        }
        if (ho < 10 ){
            ho = '0' + ho;
        }
        InputHora_E.setAttribute("value", ho+' : '+min+' : '+se+' '+ AMPM);
        InputHora_E.setAttribute("disabled","");

    };

    hora_fecha();
    var intval = setInterval(hora_fecha, 1000);
}())