//job
const jobs = [
    { title: 'Software Engineer', category: 'Informasi Dan Teknologi', description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' },
    { title: 'Data Analyst', category: 'Informasi Dan Teknologi', description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' },
    { title: 'Perawat', category: 'Kesehatan', description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' },
    { title: 'Dokter', category: 'Kesehatan', description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' },
    { title: 'Pertambangan', category: 'Pertambangan', description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' },
    { title: 'Customer Service', category: 'Jasa', description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' },
    { title: 'Marketing', category: 'Jasa', description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' }
];

function displayJobs(jobList) {
    const jobContainer = document.getElementById('jobContainer');
    jobContainer.innerHTML = '';

    jobList.forEach(job => {
        const jobElement = document.createElement('div');
        jobElement.className = 'kotak';
        jobElement.innerHTML = `
            <h2>${job.title}</h2>
            <p>${job.description}</p>
            <div class="bawah">
                <p>Learn more</p>
            </div>
        `;
        jobContainer.appendChild(jobElement);
    });
}

function searchJobs() {
    const searchValue = document.querySelector('input.search').value.toLowerCase();
    const filteredJobs = jobs.filter(job => job.title.toLowerCase().includes(searchValue) || job.category.toLowerCase().includes(searchValue));
    displayJobs(filteredJobs);
}
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
