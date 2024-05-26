function switchForm(role) {
    const pelamarForm = document.getElementById('pelamarForm');
    const pemberiForm = document.getElementById('pemberiForm');
    if (role === 'pelamar') {
        pelamarForm.style.display = 'block';
        pemberiForm.style.display = 'none';
    } else if (role === 'pemberi') {
        pelamarForm.style.display = 'none';
        pemberiForm.style.display = 'block';
    }
}

function handleRegister(event) {
    event.preventDefault(); // Mencegah pengiriman form default
    const role = document.querySelector('input[name="role"]:checked').value;
    let valid = true;

    if (role === 'pelamar') {
        const name = document.querySelector('input[name="pelamar_name"]').value;
        const address = document.querySelector('input[name="pelamar_address"]').value;
        const email = document.querySelector('input[name="pelamar_email"]').value;
        const birthdate = document.querySelector('input[name="pelamar_birthdate"]').value;
        const profilePic = document.querySelector('input[name="pelamar_profile_pic"]').value;

        if (!name || !address || !email || !birthdate || !profilePic) {
            valid = false;
        }


    } else if (role === 'pemberi') {
        const name = document.querySelector('input[name="pemberi_name"]').value;
        const company = document.querySelector('input[name="pemberi_company"]').value;
        const email = document.querySelector('input[name="pemberi_email"]').value;
        const address = document.querySelector('input[name="pemberi_address"]').value;

        if (!name || !company || !email || !address) {
            valid = false;
        }

    }

    if (valid) {
        Swal.fire({
            icon: 'success',
            title: 'Registrasi berhasil',
            text: 'Akun Anda telah dibuat.',
        }).then(() => {
            window.location.href = 'index.html';
        });
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Registrasi gagal',
            text: 'Harap isi semua kolom yang diperlukan.',
        });
    }
}
