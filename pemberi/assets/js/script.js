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