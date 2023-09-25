/*
$("#myCarousel").carousel();

// Enable Carousel Indicators
$(".item").click(function () {
    $("#myCarousel").carousel(1);
});

// Enable Carousel Controls
$(".carousel-control-prev").click(function () {
    $("#myCarousel").carousel("prev");
});
*/
$('#imageModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var imageSrc = button.attr('src');
    var modal = $(this);
    modal.find('.modal-body img').attr('src', imageSrc);
});

$(".btn-asociate-principal").click(function () {
    $("#modal-asociate").modal("show");
});


$('body').on('beforeSubmit', 'form#asociate-form', function () {
    var form = $(this);
    var modalparent = $(this).parents('#modal-asociate');
    
//    $(this).find(':submit').attr("data-original-text", $('.formpreventsubmit').find(':submit').html());
//    $(this).find(':submit').prop("disabled", true);
//    $(this).find(':submit').html('<i class="spinner-border spinner-border-sm"></i> Aguarde procesando.....');

    var data = new FormData(document.getElementById("asociate-form"));

    /*adjunta los archivos al FormData para que se puedan enviar mediante ajax*/
    jQuery.each($('input[name^="files"]')[0].files, function(i, file) {       
        namedata = 'files['+i+']';
        data.append(namedata, file);
    });
       
       
    $.ajax({
        url: form.attr('action'),
        type: 'post',
        contentType:false,
        data: data,
        processData:false,        
        dataType: 'json',
        
        beforeSend:function(){
        },
        success: function (response) {
            if (response.status == 'formulario') {
                modalparent.modal('show').find('.modalContent').html(response.result);
                $(form).find(':submit').prop("disabled", false);
                $(form).find(':submit').html($('.formpreventsubmit').find(':submit').attr("data-original-text"));
            } 
        },
        error: function (xhr) {
            //console.log())
            reportarNotificacionGeneral(xhr.responseText, 'danger', true);
            $(form).find(':submit').prop("disabled", false);
            $(form).find(':submit').html($('.formpreventsubmit').find(':submit').attr("data-original-text"));
            
        },
        complete: function (response) {
        }
    });
    return false;
});