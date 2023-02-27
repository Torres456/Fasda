
(function(){
    var hora_fecha = function(){
        var fe = new Date(),
        ho = fe.getHours(),AMPM,
        min = fe.getMinutes(),
        se = fe.getSeconds()

        var InputHora_S = document.getElementById('textsalida');

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
        InputHora_S.setAttribute("value", ho+' : '+min+' : '+se+' '+ AMPM);
        InputHora_S.setAttribute("disabled","");
    };

    hora_fecha();
    var intval = setInterval(hora_fecha, 1000);
}())