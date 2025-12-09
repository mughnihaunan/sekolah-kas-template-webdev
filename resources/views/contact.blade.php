<x-layouts.homepage title="Kontak Sekolah">

    <style>
        .contact-section {
            padding: 60px 0;
        }

        .contact-title {
            font-size: 3rem;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 50px;
            text-align: center;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 35px;
            padding: 20px;
            border-left: 4px solid #2563eb;
            background: rgba(37, 99, 235, 0.03);
        }

        .contact-icon {
            font-size: 2rem;
            color: #2563eb;
            margin-right: 20px;
            margin-top: 5px;
        }

        .contact-label {
            font-size: 0.85rem;
            font-weight: 600;
            color: #2563eb;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        .contact-value {
            font-size: 1.2rem;
            font-weight: 500;
            color: #1e293b;
            line-height: 1.6;
        }

        .contact-value a {
            color: #2563eb;
            text-decoration: none;
        }

        .contact-value a:hover {
            text-decoration: underline;
        }

        .map-title {
            font-size: 2rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 30px;
            text-align: center;
        }

        .map-container {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        body.dark-mode .contact-title,
        body.dark-mode .map-title {
            color: #e2e8f0;
        }

        body.dark-mode .contact-item {
            background: rgba(96, 165, 250, 0.1);
            border-left-color: #60a5fa;
        }

        body.dark-mode .contact-icon,
        body.dark-mode .contact-label {
            color: #60a5fa;
        }

        body.dark-mode .contact-value {
            color: #cbd5e1;
        }

        body.dark-mode .contact-value a {
            color: #60a5fa;
        }
    </style>

    <div class="container contact-section">
        <h1 class="contact-title">Hubungi Kami</h1>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                
                <div class="contact-item">
                    <i class="bi bi-geo-alt-fill contact-icon"></i>
                    <div>
                        <div class="contact-label">Alamat</div>
                        <div class="contact-value">Jl. Raya Ragunan No.33, RT.5/RW.7, Jati Padang, Ps. Minggu, Jakarta Selatan 12540</div>
                    </div>
                </div>

                <div class="contact-item">
                    <i class="bi bi-telephone-fill contact-icon"></i>
                    <div>
                        <div class="contact-label">Telepon</div>
                        <div class="contact-value"><a href="tel:+62217806293">(021) 7806293</a></div>
                    </div>
                </div>

                <div class="contact-item">
                    <i class="bi bi-envelope-fill contact-icon"></i>
                    <div>
                        <div class="contact-label">Email</div>
                        <div class="contact-value"><a href="mailto:mail28jkt@gmail.com">mail28jkt@gmail.com</a></div>
                    </div>
                </div>

                <div class="contact-item">
                    <i class="bi bi-globe contact-icon"></i>
                    <div>
                        <div class="contact-label">Website</div>
                        <div class="contact-value"><a href="https://sman28jkt.sch.id/" target="_blank">sman28jkt.sch.id</a></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="mt-5">
            <h2 class="map-title">Lokasi Sekolah</h2>

                <div class="map-container shadow rounded" style="overflow:hidden; height:450px;">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4761.06187260354!2d106.83085887575108!3d-6.286012393702911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f21106b16e67%3A0xc0ca83489c187583!2sSMA%20NEGERI%2028%20Jakarta!5e1!3m2!1sid!2sid!4v1765274557741!5m2!1sid!2sid"
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

    </div>

</x-layouts.homepage>
