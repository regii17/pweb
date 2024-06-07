//function login
function handleLogin(event) {
    event.preventDefault(); // Mencegah pengiriman form default
    const username = document.querySelector('input[name="username"]').value;
    const password = document.querySelector('input[name="password"]').value;

    // Tampilkan preloader
    document.querySelector('.preloader').style.display = 'flex';

    // Logika pengecekan username setelah sedikit penundaan untuk memperlihatkan preloader
    setTimeout(() => {
        if (username === 'pelamar') {
            window.location.href = 'pelamar/home.html';
        } else if (username === 'pengirim') {
            window.location.href = 'pengirim/home.html';
        } else {
            document.querySelector('.preloader').style.display = 'none';
            Swal.fire({
                icon: 'error',
                title: 'Username tidak dikenali',
                text: 'Silakan coba lagi dengan username yang benar.',
            });
        }
    }, 2000); 
}
//function register
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
        const nama = document.querySelector('input[name="pelamar_nama"]').value;
        const alamat = document.querySelector('input[name="pelamar_alamat"]').value;
        const email = document.querySelector('input[name="pelamar_email"]').value;
        const ttl = document.querySelector('input[name="pelamar_ttl"]').value;
        const foto = document.querySelector('input[name="pelamar_foto"]').value;
        const prov = document.querySelector('select[name="pelamar_provinsi"]').value;
        const kota = document.querySelector('select[name="pelamar_kota"]').value;
        const kecamatan = document.querySelector('select[name="pelamar_kecamatan"]').value;

        if (!nama || !alamat || !email || !ttl || !prov || !kota || !kecamatan) {
            valid = false;
        }


    } else if (role === 'pemberi') {
        const nama = document.querySelector('input[name="pemberi_nama"]').value;
        const perusahaan = document.querySelector('input[name="pemberi_perusahaan"]').value;
        const email = document.querySelector('input[name="pemberi_email"]').value;
        const alamat = document.querySelector('input[name="pemberi_alamat"]').value;
        const prov = document.querySelector('select[name="pemberi_provinsi"]').value;
        const kota = document.querySelector('select[name="pemberi_kota"]').value;
        const kecamatan = document.querySelector('select[name="pemberi_kecamatan"]').value;

        if (!nama || !perusahaan || !email || !alamat || !prov || !kota || !kecamatan) {
            valid = false;
        }

    }

    if (valid) {
        Swal.fire({
            icon: 'success',
            title: 'Registrasi berhasil',
            text: 'Akun Anda telah dibuat.',
        }).then(() => {
            window.location.href = 'login.html';
        });
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Registrasi gagal',
            text: 'Harap isi semua kolom yang diperlukan.',
        });
    }
}

//mengisi district
const provinces = {
    "Jawa Barat": ["Bandung", "Bogor", "Bekasi"],
    "Jawa Tengah": ["Semarang", "Surakarta", "Magelang"],
    "Jawa Timur": ["Surabaya", "Malang", "Kediri"]
};

const districts = {
    "Bandung": ["Andir", "Astana Anyar", "Bojongloa Kaler"],
    "Bogor": ["Bogor Barat", "Bogor Timur", "Bogor Utara"],
    "Bekasi": ["Bekasi Barat", "Bekasi Timur", "Bekasi Utara"],
    "Semarang": ["Banyumanik", "Candisari", "Gajah Mungkur"],
    "Surakarta": ["Banjarsari", "Jebres", "Laweyan"],
    "Magelang": ["Magelang Selatan", "Magelang Tengah", "Magelang Utara"],
    "Surabaya": ["Asemrowo", "Benowo", "Bubutan"],
    "Malang": ["Blimbing", "Kedungkandang", "Klojen"],
    "Kediri": ["Mojoroto", "Pesantren", "Kota"]
};

document.addEventListener("DOMContentLoaded", () => {
    const provinceSelects = document.querySelectorAll("select[id$='_provinsi']");
    provinceSelects.forEach(select => {
        select.innerHTML = '<option value="">Pilih Provinsi...</option>' +
            Object.keys(provinces).map(province => `<option value="${province}">${province}</option>`).join('');
    });
});

function updateCities(role) {
    const province = document.getElementById(`${role}_provinsi`).value;
    const citySelect = document.getElementById(`${role}_kota`);
    if (province) {
        citySelect.innerHTML = '<option value="">Pilih Kota...</option>' +
            provinces[province].map(city => `<option value="${city}">${city}</option>`).join('');
    } else {
        citySelect.innerHTML = '<option value="">Pilih Kota...</option>';
    }
    document.getElementById(`${role}_kecamatan`).innerHTML = '<option value="">Pilih Kecamatan...</option>';
}

function updateDistricts(role) {
    const city = document.getElementById(`${role}_kota`).value;
    const districtSelect = document.getElementById(`${role}_kecamatan`);
    if (city) {
        districtSelect.innerHTML = '<option value="">Pilih Kecamatan...</option>' +
            districts[city].map(district => `<option value="${district}">${district}</option>`).join('');
    } else {
        districtSelect.innerHTML = '<option value="">Pilih Kecamatan...</option>';
    }
}
