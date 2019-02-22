function flash_message_add()
{
    $('#flash_message').html('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-check-circle"></i> Data Berhasil Disimpan !</div>');
}

function flash_message_update()
{
    $('#flash_message').html('<div class="alert alert-info alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-check-circle"></i> Data Berhasil Diubah !</div>');

}

function flash_message_deleted()
{
    $('#flash_message').html('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-check-circle"></i> Data Berhasil Dihapus ! </div>');

}

function flash_message()
{
    $('#flash_message').html('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-info"></i> Maaf, Username Atau Password Yang Anda Masukkan Salah !</div>');
}
