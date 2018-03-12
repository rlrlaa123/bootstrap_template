$(document).ready(function() {

    var index = 1;

    $('#rec_button').click(function () {
        if(index===1){
            index++;
            alert('record');
        }
        else if(index===2){
            $('#rec_button').parent().attr('href','#stop');
            index++;
            alert('stop');
        }
        else if(index===3){
            $('#rec_button').parent().attr('href','#play');
            index++;
            alert('play');
        }
    });
});