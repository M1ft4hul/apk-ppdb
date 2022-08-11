const Sweetalert = $('.sweetalert').data('sweetalert');
// console.log(Sweetalert);

if (Sweetalert) {
	Swal.fire({
		title: 'Deleted!',
		text: Sweetalert,
		type: 'success'                       
	});
}

// tombol hapus
$('.widget-content .mixin').on('click', function () {
    const toast = swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        padding: '2em'
    });

    toast({
        type: 'success',
        title: 'Data Terhapus !!',
        padding: '2em',
    })

})
