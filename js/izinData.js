document.addEventListener('DOMContentLoaded', function() {
    const izinData = JSON.parse(localStorage.getItem('izinData')) || [];
    const dataTableBody = document.querySelector('#dataTable tbody');

    if (izinData.length > 0) {
        izinData.forEach((data, index) => {
            const row = dataTableBody.insertRow();

            row.insertCell(0).innerText = data.nama;
            row.insertCell(1).innerText = data.tgl_masuk;
            row.insertCell(2).innerText = data.tgl_keluar;
            row.insertCell(3).innerText = data.submit_date;

            const actionCell = row.insertCell(4);
            const editButton = document.createElement('button');
            editButton.className = 'edit-btn';
            editButton.innerText = 'Edit';
            editButton.onclick = () => editName(row, index);

            const deleteButton = document.createElement('button');
            deleteButton.className = 'delete-btn';
            deleteButton.innerText = 'Delete';
            deleteButton.onclick = () => deleteRow(row, index);

            actionCell.appendChild(editButton);
            actionCell.appendChild(deleteButton);
        });
    } else {
        dataTableBody.innerHTML = '<tr><td colspan="5">Tidak ada data yang disimpan.</td></tr>';
    }
});

// Fungsi untuk menghapus baris tabel
function deleteRow(row, index) {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        const izinData = JSON.parse(localStorage.getItem('izinData')) || [];
        const dataId = izinData[index].id; // Assuming there's an 'id' property

        // Remove the row from the table
        row.parentNode.removeChild(row);

        // Remove the data from local storage
        izinData.splice(index, 1);
        localStorage.setItem('izinData', JSON.stringify(izinData));

        // Send request to delete the data from the database
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "../php/deleteData.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText);
            }
        };
        xhr.send("id=" + dataId);
    }
}

// Fungsi untuk mengedit nama
function editName(row, index) {
    var newName = prompt("Masukkan nama yang baru:", row.cells[0].innerText);
    var newTglMasuk = prompt("Masukkan tanggal masuk yang baru (dd-mm-yyyy):", row.cells[1].innerText);
    var newTglKeluar = prompt("Masukkan tanggal keluar yang baru (dd-mm-yyyy):", row.cells[2].innerText);
    if (newName !== null && newTglMasuk !== null && newTglKeluar !== null) {
        const izinData = JSON.parse(localStorage.getItem('izinData')) || [];
        const dataId = izinData[index].id; // Assuming there's an 'id' property

        // Update the row in the table
        row.cells[0].innerText = newName;
        row.cells[1].innerText = newTglMasuk;
        row.cells[2].innerText = newTglKeluar;

        // Update the data in local storage
        izinData[index].nama = newName;
        izinData[index].tgl_masuk = newTglMasuk;
        izinData[index].tgl_keluar = newTglKeluar;
        localStorage.setItem('izinData', JSON.stringify(izinData));

        // Send request to update the data in the database
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "../php/updateData.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText);
            }
        };
        xhr.send("id=" + dataId + "&nama=" + newName + "&tgl_masuk=" + newTglMasuk + "&tgl_keluar=" + newTglKeluar);
    }
}

// Fungsi untuk mencari nama
function searchName() {
    const input = document.getElementById('searchInput');
    const filter = input.value.toLowerCase();
    const table = document.getElementById('dataTable');
    const tr = table.getElementsByTagName('tr');

    for (let i = 1; i < tr.length; i++) {
        const td = tr[i].getElementsByTagName('td')[0];
        if (td) {
            const txtValue = td.textContent || td.innerText;
            tr[i].style.display = txtValue.toLowerCase().indexOf(filter) > -1 ? '' : 'none';
        }
    }
}


