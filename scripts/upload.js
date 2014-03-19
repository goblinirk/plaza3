// this script executes when click on upload images link
function uploadImage() {
        $("#forum_image").click();
        return false;
}
function clearImage() {
        $('.preview').remove();
        $('#real_thumb').val('');
        return false;
}
// this script for collecting the form data and pass to the controller action and doing the on success validations
function send(){
    var formData = new FormData($("#gallery-images-form")[0]);
    //console.log(formData);
    $.ajax({
        url: '/galleryImages/uploadThumb',
        type: 'POST',
        data: formData,
        datatype:'json',
        // async: false,
        beforeSend: function() {
            // do some loading options
        },
        success: function (data) {
            $('.preview').remove();
            $('#real_thumb').val(data);
            $('#forum_image').after('<img style="margin: 0px 20px 0px 0px;" class="preview" src="/images/'+data+'" width="80" />');
        },
 
        complete: function() {
            // success alerts
        },
 
        error: function (data) {
            alert("При загрузке изображения произошел сбой. Попробуйте еще раз через несколько минут.");
            console.log(data);
        },
        cache: false,
        contentType: false,
        processData: false
    });
 
    return false;
}