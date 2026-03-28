<div class="login-container">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=DM+Sans:wght@300;400;500&display=swap');

        :root {
            --cream: #f0f7f4;
            --dark: #0d2b1f;
            --accent: #1e7a52;
            --accent-light: #3aab76;
            --muted: #5a7367;
            --border: #c6ddd5;
            --white: #ffffff;
            --error: #d95b5b;
        }

        .login-container {
            font-family: "DM Sans", sans-serif;
            background: var(--cream);
            height: 100vh;
            width: 100%;
            display: flex;
            overflow: hidden;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        /* ===== LEFT PANEL ===== */
        .left-panel {
            flex: 0 0 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 60px 70px;
            background: var(--white);
            position: relative;
            z-index: 2;
        }

        .brand {
            position: absolute;
            top: 36px;
            left: 50px;
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .brand-icon {
            width: 34px;
            height: 34px;
            background: var(--accent);
            border-radius: 8px;
            display: grid;
            place-items: center;
        }

        .brand-icon svg {
            width: 18px;
            height: 18px;
            fill: white;
        }

        .brand-name {
            font-family: "Playfair Display", serif;
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--dark);
            letter-spacing: 0.01em;
        }

        .form-wrapper {
            width: 100%;
            max-width: 400px;
        }

        .greeting {
            font-size: 0.78rem;
            font-weight: 500;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--accent);
            margin-bottom: 10px;
        }

        h1 {
            font-family: "Playfair Display", serif;
            font-size: 2.4rem;
            font-weight: 700;
            color: var(--dark);
            line-height: 1.2;
            margin-bottom: 8px;
        }

        .subtitle {
            font-size: 0.9rem;
            color: var(--muted);
            font-weight: 300;
            margin-bottom: 36px;
        }

        /* ===== RIGHT PANEL ===== */
        .right-panel {
            flex: 0 0 50%;
            position: relative;
            overflow: hidden;
        }

        .right-panel img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(160deg,
                    rgba(13, 43, 31, 0.2) 0%,
                    rgba(13, 43, 31, 0.7) 100%);
        }

        .panel-copy {
            position: absolute;
            bottom: 50px;
            left: 44px;
            right: 44px;
            color: var(--white);
        }

        .panel-tag {
            font-size: 0.72rem;
            font-weight: 500;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--accent-light);
            margin-bottom: 10px;
        }

        .panel-copy h2 {
            font-family: "Playfair Display", serif;
            font-size: 2.2rem;
            font-weight: 700;
            line-height: 1.25;
            margin-bottom: 12px;
            text-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
        }

        .panel-copy p {
            font-size: 0.95rem;
            font-weight: 300;
            opacity: 0.9;
            line-height: 1.6;
            max-width: 380px;
        }

        /* Filament UI Overrides to match theme */
        .fi-input-wrp {
            border-radius: 10px !important;
            background-color: var(--cream) !important;
            border: 1.5px solid var(--border) !important;
            transition: all 0.2s !important;
        }

        .fi-input-wrp:focus-within {
            border-color: var(--accent) !important;
            background-color: var(--white) !important;
            box-shadow: 0 0 0 4px rgba(30, 122, 82, 0.1) !important;
        }

        .fi-btn {
            background-color: var(--dark) !important;
            border-radius: 10px !important;
            padding: 12px !important;
            font-weight: 500 !important;
            transition: all 0.3s !important;
        }

        .fi-btn span {
            color: #ffffff !important;
        }

        .fi-btn:hover {
            background-color: var(--accent) !important;
        }

        /* Service Buttons Styling */
        .divider {
            display: flex;
            align-items: center;
            gap: 14px;
            margin: 24px 0;
            color: var(--border);
            font-size: 0.78rem;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: var(--border);
        }

        .social-row {
            display: flex;
            gap: 12px;
        }

        .btn-social {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px;
            border: 1.5px solid var(--border);
            border-radius: 10px;
            background: var(--white);
            font-family: "DM Sans", sans-serif;
            font-size: 0.82rem;
            font-weight: 500;
            color: var(--dark);
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
        }

        .btn-social:hover {
            border-color: var(--accent);
            background: var(--cream);
        }

        .btn-social svg {
            width: 18px;
            height: 18px;
            stroke: var(--accent);
        }

        .fi-modal-content,
        .fi-section {
            border-radius: 15px !important;
        }

        @media (max-width: 768px) {
            .right-panel {
                display: none;
            }

            .left-panel {
                flex: 0 0 100%;
                padding: 40px 30px;
            }
        }
    </style>

    <!-- LEFT: FORM -->
    <div class="left-panel">
        <a class="brand" href="/">
            <div class="brand-icon">
                <svg viewBox="0 0 24 24" fill="white">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3a7 7 0 0 0 9.79 9.79z" />
                </svg>
            </div>
            <span class="brand-name">Masjid Al-Amin</span>
        </a>

        <div class="form-wrapper">
            <p class="greeting">☽ Bismillahirrahmanirrahim</p>
            <h1>Portal Zakat<br />Masjid Al-Amin</h1>
            <p class="subtitle">
                Masuk untuk menunaikan zakat & melihat laporan donasi Anda.
            </p>

            <div class="fi-auth-form">
                {{ $this->content }}
            </div>

            <div class="divider">layanan lainnya</div>

            <div class="social-row">
                <a href="#" class="btn-social">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M12 2a10 10 0 1 0 0 20A10 10 0 0 0 12 2z" />
                        <path d="M12 8v4l3 3" />
                    </svg>
                    Jadwal Sholat
                </a>
                <a href="#" class="btn-social">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="2" y="3" width="20" height="14" rx="2" />
                        <path d="M8 21h8M12 17v4" />
                    </svg>
                    Info Zakat
                </a>
            </div>
        </div>
    </div>

    <!-- RIGHT: IMAGE -->
    <div class="right-panel">
        <img src="https://lh3.googleusercontent.com/gps-cs-s/AHVAweqAj2WQ6f4sEm6j8S3TuSHMYZgK7cesd8XMyr2JEZGppVbZ9OGgZ_70779fyGbB1pIKq6VTwXA5k93kP2Q6pe-aB0nWmky-atx0ktEYo-jX_mH6DdHuebKgFBEkHTzM7kaaW0pE=s680-w680-h510-rw"
            alt="Masjid Al Amin" />
        <div class="overlay"></div>
        <div class="panel-copy">
            <p class="panel-tag">☽ Masjid Al-Amin · Melayani Umat</p>
            <h2>Tunaikan Zakat<br />dengan Mudah</h2>
            <p>
                Bayar zakat fitrah, zakat maal, infaq, dan sedekah secara
                online. Amanah, transparan, dan tepat sasaran untuk mustahiq
                di sekitar kita.
            </p>
        </div>
    </div>
</div>
