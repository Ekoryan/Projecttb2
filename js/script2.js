document.addEventListener('DOMContentLoaded', function () {
    const dataContainer = document.getElementById('another-data-container');

    const kebudayaan = [
        {
            nama: "Kehidupan Masyarakat",
            asal: "Desa Badui, Banten, Indonesia",
            deskripsi: "Masyarakat Badui dikenal karena mempertahankan cara hidup tradisional yang ketat dan menolak pengaruh dari luar. Mereka hidup dengan aturan adat yang sangat kuat yang dikenal sebagai 'pikukuh'.",
            pakaian: "Pria Badui mengenakan pakaian berwarna putih atau hitam yang terbuat dari bahan alami. Wanita mengenakan kain tenun dengan motif khas.",
            musik: "Musik tradisional Badui biasanya berupa nyanyian dan instrumen sederhana yang digunakan dalam upacara adat.",
            makna: "Kehidupan masyarakat Badui melambangkan ketaatan kepada adat dan harmoni dengan alam.",
            gambar: "image/badui_life.jpg"
        },
        {
            nama: "Rumah Adat",
            asal: "Desa Badui, Banten, Indonesia",
            deskripsi: "Rumah adat Badui terbuat dari bahan-bahan alami seperti kayu dan bambu, serta atap dari daun kelapa. Rumah ini didesain untuk beradaptasi dengan lingkungan sekitar.",
            pakaian: "Tidak berlaku",
            musik: "Tidak berlaku",
            makna: "Rumah adat Badui melambangkan kesederhanaan dan keberlanjutan.",
            gambar: "image/badui_house.jpeg"
        },
        {
            nama: "Pikukuh",
            asal: "Desa Badui, Banten, Indonesia",
            deskripsi: "Pikukuh adalah aturan adat yang sangat dihormati dan diikuti oleh masyarakat Badui. Aturan ini mencakup berbagai aspek kehidupan, termasuk cara bertani, membangun rumah, dan berinteraksi dengan alam.",
            pakaian: "Tidak berlaku",
            musik: "Tidak berlaku",
            makna: "Pikukuh melambangkan kedisiplinan, ketaatan, dan kehidupan yang selaras dengan alam.",
            gambar: "image/pikukuh.jpg"
        },
        {
            nama: "Wisata Kampung Adat Baduy",
            asal: "Desa Baduy, Banten, Indonesia",
            deskripsi: "Kampung Adat Baduy adalah destinasi wisata yang menawarkan pengalaman unik untuk melihat kehidupan tradisional masyarakat Baduy yang menolak pengaruh modernisasi. Pengunjung dapat belajar tentang adat istiadat, kebudayaan, dan cara hidup masyarakat Baduy yang sangat terisolasi.",
            aktivitas: "Wisatawan dapat melakukan trekking ke desa Baduy Dalam, berinteraksi dengan penduduk lokal, melihat proses pembuatan kerajinan tangan, dan menikmati pemandangan alam yang asri.",
            aturan: "Pengunjung diharapkan menghormati adat istiadat setempat, seperti tidak menggunakan gadget, tidak memotret di area terlarang, dan berpakaian sopan.",
            makna: "Wisata ini memberikan wawasan tentang pentingnya menjaga budaya dan tradisi leluhur serta hidup selaras dengan alam.",
            gambar: "image/baduy_wisata.jpg"
        },
        {
            nama: "Trekking di Baduy",
            asal: "Desa Baduy, Banten, Indonesia",
            deskripsi: "Trekking di wilayah Baduy adalah aktivitas populer yang memungkinkan wisatawan untuk menjelajahi alam yang masih alami dan berinteraksi dengan masyarakat Baduy.",
            aktivitas: "Rute trekking biasanya dimulai dari Ciboleger menuju Desa Baduy Luar dan Baduy Dalam. Sepanjang perjalanan, wisatawan dapat menikmati keindahan alam dan keramahtamahan penduduk lokal.",
            aturan: "Wisatawan harus mematuhi aturan yang ditetapkan oleh masyarakat Baduy, seperti tidak membuang sampah sembarangan, tidak merusak lingkungan, dan tidak mengganggu kehidupan sehari-hari penduduk.",
            makna: "Aktivitas ini mengajarkan tentang pentingnya menjaga kelestarian alam dan menghormati budaya setempat.",
            gambar: "image/baduy_trekking.jpeg"
        },
        {
            nama: "Kerajinan Tangan Baduy",
            asal: "Desa Baduy, Banten, Indonesia",
            deskripsi: "Masyarakat Baduy menghasilkan berbagai kerajinan tangan, seperti tenun, anyaman bambu, dan kerajinan dari kayu, yang semuanya dibuat dengan teknik tradisional.",
            aktivitas: "Pengunjung dapat membeli kerajinan tangan sebagai oleh-oleh dan menyaksikan proses pembuatannya secara langsung.",
            aturan: "Saat membeli kerajinan, disarankan untuk berinteraksi dengan sopan dan menghargai proses pembuatan yang memakan waktu dan tenaga.",
            makna: "Kerajinan tangan Baduy menggambarkan keahlian, ketekunan, dan seni budaya masyarakat setempat.",
            gambar: "image/baduy_kerajinan.jpg"
        }
    ];

    kebudayaan.forEach(item => {
        const budayaDiv = document.createElement('div');
        budayaDiv.className = 'budaya-container';

        const fields = [
            { label: 'Nama Kebudayaan', value: item.nama },
            { label: 'Asal Daerah', value: item.asal },
            { label: 'Deskripsi', value: item.deskripsi },
            { label: 'Pakaian', value: item.pakaian },
            { label: 'Musik', value: item.musik },
            { label: 'Makna', value: item.makna }
        ];

        fields.forEach(field => {
            const div = document.createElement('div');
            const spanLabel = document.createElement('span');
            const spanValue = document.createElement('span');

            spanLabel.textContent = field.label + ': ';
            spanValue.textContent = field.value;

            div.appendChild(spanLabel);
            div.appendChild(spanValue);
            budayaDiv.appendChild(div);
        });

        const imageDiv = document.createElement('div');
        const image = document.createElement('img');
        image.src = item.gambar;
        image.alt = item.nama;
        imageDiv.appendChild(image);
        budayaDiv.appendChild(imageDiv);

        dataContainer.appendChild(budayaDiv);
    });
});
