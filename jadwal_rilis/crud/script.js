var keyword  = document.getElementById("keyword");
var con_data = document.getElementById("data");





keyword.addEventListener("keyup", function() {
    var ajax = new XMLHttpRequest();

    ajax.onreadystatechange = function() {
        if ( ajax.readyState == 4 && ajax.status == 200 ) {
            console.log('Anjay')
            con_data.innerHTML = ajax.responseText;
        }
    }
    ajax.open("GET","ajax.php",true);
    ajax.send();
});






