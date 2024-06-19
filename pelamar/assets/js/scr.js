//table
document.addEventListener('DOMContentLoaded', () => {
    displayJobs(jobs);
});
document.addEventListener("DOMContentLoaded", function() {
    const contactButtons = document.querySelectorAll(".contact");
    const deleteButtons = document.querySelectorAll(".delete");

    contactButtons.forEach(button => {
        button.addEventListener("click", function() {
            Swal.fire({
                icon: 'success',
                title: 'eemail@gmail.com',
                text: 'Silahkan hubungi contact tersebut untuk info lebih lanjut',
            });
        });
    });

    deleteButtons.forEach(button => {
        button.addEventListener("click", function() {
            const row = this.closest("tr");
            row.remove();
            Swal.fire({
                icon: 'success',
                text: 'Data berhasil dihapus',
            });
        });
    });
});

//history
function sortHistory() {
    const sortBy = document.getElementById('sort-options').value;
    const historyList = document.getElementById('history-list');
    const items = Array.from(historyList.getElementsByTagName('li'));

    if (sortBy === 'date') {
        items.sort((a, b) => {
            const dateA = new Date(a.querySelector('p:nth-of-type(1)').innerText.split(': ')[1]);
            const dateB = new Date(b.querySelector('p:nth-of-type(1)').innerText.split(': ')[1]);
            return dateB - dateA;
        });
    } else if (sortBy === 'status') {
        const statusOrder = ['Dalam proses', 'Diterima', 'Ditolak'];
        items.sort((a, b) => {
            const statusA = a.querySelector('p:nth-of-type(2)').innerText.split(': ')[1];
            const statusB = b.querySelector('p:nth-of-type(2)').innerText.split(': ')[1];
            return statusOrder.indexOf(statusA) - statusOrder.indexOf(statusB);
        });
    }

    items.forEach(item => historyList.appendChild(item));
}
//mengisi district
const provinces = {
    "Jawa Barat": ["Bandung", "Bogor", "Bekasi","Subang"],
    "Jawa Tengah": ["Semarang", "Surakarta", "Magelang"],
    "Jawa Timur": ["Surabaya", "Malang", "Kediri"]
};

const districts = {
    "Bandung": ["Andir", "Astana Anyar", "Bojongloa Kaler"],
    "Bogor": ["Bogor Barat", "Bogor Timur", "Bogor Utara"],
    "Bekasi": ["Bekasi Barat", "Bekasi Timur", "Bekasi Utara"],
    "Subang": ["Kasomalang", "Cisalak", "Jalan Cagak"],
    "Semarang": ["Banyumanik", "Candisari", "Gajah Mungkur"],
    "Surakarta": ["Banjarsari", "Jebres", "Laweyan"],
    "Magelang": ["Magelang Selatan", "Magelang Tengah", "Magelang Utara"],
    "Surabaya": ["Asemrowo", "Benowo", "Bubutan"],
    "Malang": ["Blimbing", "Kedungkandang", "Klojen"],
    "Kediri": ["Mojoroto", "Pesantren", "Kota"]
};

document.addEventListener("DOMContentLoaded", () => {
    const provinceSelects = 
    document.querySelectorAll("select[id$='_provinsi']");
    provinceSelects.forEach(select => {
        select.innerHTML = Object.keys(provinces).map(province => `<option value="${province}">${province}</option>`).join('');
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
function showEditForm() {
    document.querySelector('.profile-body').style.display = 'none';
    document.querySelector('.edit-profile-form').style.display = 'block';
    document.body.style.height = "1530px";
}
function hideEditForm() {
    document.querySelector('.profile-body').style.display = 'block';
    document.querySelector('.edit-profile-form').style.display = 'none';
}