function hapusMember(url) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Yakin ingin hapus data member?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
    }).then((result) => {
        if (result.value) {
            document.location.href = url;
        }
    })
}

function hapusOutlet(url) {
    Swal.fire({
        title: 'Are you sure?',
        text: "Yakin ingin hapus data outlet?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
    }).then((result) => {
        if (result.value) {
            document.location.href = url;
        }
    })
}

function hapusPaket(url) {
    Swall.fire({
        title: 'Are you sure?',
        text: "Yakin ingin hapus data paket?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
    }).then((result) => {
        if (result.value) {
            document.location.href = url;
        }
    })
}

function hapusTransaksi(url) {
    Swall.fire({
        title: 'Are you sure?',
        text: "Yakin ingin hapus data transaksi?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
    }).then((result) => {
        if (result.value) {
            document.location.href = url;
        }
    });
}
function hapusUser(url) {
    Swall.fire({
        title: 'Are you sure?',
        text: "Yakin ingin hapus data user?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
    }).then((result) => {
        if (result.value) {
            document.location.href = url;
        }
    });
}