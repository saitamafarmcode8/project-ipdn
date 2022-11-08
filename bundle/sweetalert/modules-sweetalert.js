"use strict";

$(document).ready(function()
{
    var flash_data = $('#flash_data').data('flash_data');
    if(flash_data){
        swal('Berhasil', 'Data Tahun Berhasil di simpan', 'success');
    }

    var flash_error = $('#flash_error').data('flash_error');
    if(flash_error){
        swal('Maaf', 'Data tidak di temukan', 'error');
    }

    var flash_info = $('#flash_info').data('flash_info');
    if(flash_info){
        swal('Peringatan', 'Data Tahun berhasil di nonaktifkan', 'warning');
    }

    var flash_info_success = $('#flash_info_success').data('flash_info_success');
    if(flash_info_success){
        swal('Tahun', 'Berhasil di aktifkan', 'success');
    }

    var pesan_kategori = $('#pesan_kategori').data('pesan_kategori');
    if(pesan_kategori){
        swal('Kategori', 'Berhasil di simpan', 'success');
    }

    var pesan_perbarui = $('#pesan_perbarui').data('pesan_perbarui');
    if(pesan_perbarui){
        swal('kategori', 'Berhasil diperbarui.', 'info');
    }

    $(document).on('click', '#hapus', function(e){
        e.preventDefault();
        var link = $(this).attr('href');
        swal({
            title: 'Apakah kamu sudah yakin ?',
            text: 'Kategori ini akan dihapus ?',
            icon: 'info',
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) =>{
            if(willDelete){
                window.location = link;
                swal('Berhasil di hapus',{
                    icon: 'success',
                });
            }else{
                swal('Telah di-amankan!!', 'Data yang dipilih mau dihapus kembali dengan aman', 'info');
            }
        });
    });

    $(document).on('click', '#logout', function(e){
        e.preventDefault();
        var link = $(this).attr('href');
        swal({
            title: 'Apakah semua urusan telah selesai?',
            text: 'Kamu Yakin ?',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        })
        .then((result) => {
        if (result) {
            window.location = link;
            swal('Terima kasih telah bekerja!!', {
                icon: 'success',
                timer: 5000,
            });
        } else {
            swal('Ayo ... !!', 'Bekerja Lebih giat!!', 'info');
        }
        });
    });

    var pesan_masuk = $('#pesan_masuk').data('pesan_masuk');
    if(pesan_masuk){
        swal('Surat', 'Berhasil di-simpan.', 'success');
    }

    var pesan_update = $('#pesan_update').data('pesan_update');
    if(pesan_update){
        swal('Surat!', 'Surat berhasil diperbarui', 'info');
    }

});

// $("#swal-1").click(function() {
// 	swal('Hello');
// });

// $("#swal-2").click(function() {
// 	swal('Good Job', 'You clicked the button!', 'success');
// });

// $("#swal-3").click(function() {
// 	swal('Good Job', 'You clicked the button!', 'warning');
// });

// $("#swal-4").click(function() {
// 	swal('Good Job', 'You clicked the button!', 'info');
// });

// $("#swal-5").click(function() {
// 	swal('Good Job', 'You clicked the button!', 'error');
// });

// $("#swal-6").click(function() {
//   swal({
//       title: 'Are you sure?',
//       text: 'Once deleted, you will not be able to recover this imaginary file!',
//       icon: 'warning',
//       buttons: true,
//       dangerMode: true,
//     })
//     .then((willDelete) => {
//       if (willDelete) {
//       swal('Poof! Your imaginary file has been deleted!', {
//         icon: 'success',
//       });
//       } else {
//       swal('Your imaginary file is safe!');
//       }
//     });
// });

// $("#swal-7").click(function() {
//   swal({
//     title: 'What is your name?',
//     content: {
//     element: 'input',
//     attributes: {
//       placeholder: 'Type your name',
//       type: 'text',
//     },
//     },
//   }).then((data) => {
//     swal('Hello, ' + data + '!');
//   });
// });

// $("#swal-8").click(function() {
//   swal('This modal will disappear soon!', {
//     buttons: false,
//     timer: 3000,
//   });
// });