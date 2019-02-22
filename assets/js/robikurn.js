

function loadContent(x){
    $( "#main-content" ).empty();
    $( "#main-content" ).load( x );
}



// preview foto yang telah di upload
    function preImage(input) {
        if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {

                        $('#blah').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
        }
}

function flash_message_add()
{
    $('#flash_message').html('<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Success!</strong> Data Berhasil Diinput !</div>');
}

function flash_message_update()
{
    $('#flash_message').html('<div class="alert alert-warning" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Success!</strong> Data Berhasil Diubah !</div>');

}

function flash_message_deleted()
{
    $('#flash_message').html('<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Success!</strong> Data Berhasil Dihapus !</div>');

}

function flash_message()
{
    $('#flash_message').html('<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Username Atau Password Salah !</strong> </div>');
}


window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 4000);





