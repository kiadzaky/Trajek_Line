$(function () {
    $('.tombolTambahKaryawan').on('click', function () {
        $('#karyawanModalLabel').html('Tambah Karyawan Baru');
        $('.modal-footer button[type=submit]').html('Tambah');
        $('.modal-body form').attr('action', 'http://localhost/SI_Trajek/admin/ubah')
    })
    $('.tampilModalEdit').on('click', function () {
        $('#karyawanModalLabel').html('Edit Data Karyawan');
        $('.modal-footer button[type=submit]').html('Edit');

        const nip = $(this).data('nip');

        $.ajax({
            url: 'http://localhost/SI_Trajek/admin/getEdit',
            data: { nip: nip },
            method: 'post',
            async: false,
            dataType: 'json',
            success: function (data) {
                $('#nip').val(data.nip);
                $('#nama_karyawan').val(data.nama_karyawan);
                $('#email').val(data.email);
                $('#no_telepon').val(data.no_telepon);
                $('#alamat').val(data.alamat);
                $('#password').val(data.password);
            }
        });
    });
});