<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kevin Diaz Varel - Frontend Developer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* CSS Reset & Variables */
        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --secondary: #7c3aed;
            --accent: #ec4899;
            --dark: #1e293b;
            --light: #f8fafc;
            --gray-light: #e2e8f0;
            --gray: #94a3b8;
            --gray-dark: #475569;
            --shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 20px 40px -10px rgba(0, 0, 0, 0.15);
            --transition: all 0.3s ease;
            --radius: 12px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            line-height: 1.6;
            color: var(--dark);
            background-color: var(--light);
            overflow-x: hidden;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section {
            padding: 100px 0;
        }

        h1, h2, h3, h4 {
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1rem;
        }

        h1 {
            font-size: 3.5rem;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        h2 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        h2::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background: var(--primary);
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        h3 {
            font-size: 1.8rem;
        }

        h4 {
            font-size: 1.2rem;
            color: var(--gray-dark);
        }

        p {
            margin-bottom: 1.5rem;
            color: var(--gray-dark);
            font-size: 1.1rem;
            line-height: 1.8;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: var(--transition);
        }

        ul {
            list-style: none;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 28px;
            background-color: var(--primary);
            color: white;
            border-radius: var(--radius);
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            font-size: 1rem;
            gap: 10px;
            box-shadow: var(--shadow);
        }

        .btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background-color: var(--primary);
            color: white;
        }

        /* Header & Navigation */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo span {
            color: var(--secondary);
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            font-weight: 600;
            position: relative;
            padding: 5px 0;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            background: var(--primary);
            bottom: 0;
            left: 0;
            transition: var(--transition);
            border-radius: 2px;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .mobile-menu-btn {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--dark);
        }

        /* Hero Section */
        .hero {
            padding-top: 150px;
            display: flex;
            align-items: center;
            gap: 60px;
            min-height: 100vh;
        }

        .hero-content {
            flex: 1;
        }

        .hero-image {
            flex: 1;
            position: relative;
        }

        .hero-badge {
            display: inline-block;
            padding: 8px 16px;
            background-color: rgba(37, 99, 235, 0.1);
            color: var(--primary);
            border-radius: 50px;
            font-weight: 600;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }

        .hero-title {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            line-height: 1.1;
        }

        .hero-title span {
            display: block;
            color: var(--dark);
            -webkit-text-fill-color: var(--dark);
        }

        .hero-subtitle {
            font-size: 1.5rem;
            color: var(--primary);
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        .hero-description {
            font-size: 1.1rem;
            max-width: 600px;
            margin-bottom: 2.5rem;
        }

        .hero-btns {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .profile-container {
            width: 100%;
            height: 450px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            position: relative;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 30px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            color: white;
        }

        /* About Section */
        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .about-text {
            flex: 1;
        }

        .skills {
            flex: 1;
        }

        /* Skills Grid tanpa skill bar */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .skill-card {
            background: white;
            padding: 25px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            text-align: center;
            transition: var(--transition);
            border: 1px solid var(--gray-light);
        }

        .skill-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .skill-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        /* Portfolio Grid */
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .portfolio-item {
            background-color: white;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border: 1px solid var(--gray-light);
        }

        .portfolio-item:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .portfolio-img {
            height: 200px;
            overflow: hidden;
        }

        .portfolio-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .portfolio-item:hover .portfolio-img img {
            transform: scale(1.05);
        }

        .portfolio-info {
            padding: 25px;
        }

        .portfolio-category {
            display: inline-block;
            padding: 5px 15px;
            background-color: rgba(37, 99, 235, 0.1);
            color: var(--primary);
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 15px 0;
        }

        .tech-tag {
            padding: 5px 10px;
            background-color: #e0f2fe;
            color: var(--primary);
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        /* Contact Section */
        .contact {
            background-color: var(--dark);
            color: white;
        }

        .contact h2 {
            color: white;
        }

        .contact h2::after {
            background-color: white;
        }

        .contact p {
            color: #cbd5e1;
            text-align: center;
            max-width: 700px;
            margin: 0 auto 50px;
        }

        .contact-container {
            display: flex;
            gap: 50px;
        }

        .contact-info {
            flex: 1;
        }

        .contact-form {
            flex: 1;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 1.2rem;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 15px;
            border-radius: 5px;
            border: none;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 1rem;
        }

        .form-control::placeholder {
            color: #94a3b8;
        }

        /* Footer */
        footer {
            background-color: #0f172a;
            color: white;
            padding: 50px 0 20px;
            text-align: center;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 30px 0;
        }

        .social-link {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .social-link:hover {
            background-color: var(--primary);
            transform: translateY(-5px);
        }

        .copyright {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #94a3b8;
            font-size: 0.9rem;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            h1 {
                font-size: 2.8rem;
            }
            
            h2 {
                font-size: 2.2rem;
            }
            
            .hero, .about-content, .contact-container {
                flex-direction: column;
            }
            
            .hero {
                padding-top: 120px;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .skills-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: white;
                flex-direction: column;
                padding: 20px;
                box-shadow: var(--shadow);
                text-align: center;
            }
            
            .nav-links.active {
                display: flex;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            h1 {
                font-size: 2.2rem;
            }
            
            h2 {
                font-size: 1.8rem;
            }
            
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .skills-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">
                    <i class="fas fa-code"></i>
                    Portofolio<span>.</span>
                </a>
                
                <div class="nav-links">
                    <a href="#home">Home</a>
                    <a href="#about">Tentang</a>
                    <a href="#portfolio">Portfolio</a>
                    <a href="#contact">Kontak</a>
                </div>
                
                <div class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-graduation-cap"></i> Mahasiswa Teknik Informatika
                </div>
                
                <h1 class="hero-title">
                    <span>Halo, Saya</span>
                    Kevin Diaz Varel
                </h1>
                
                <p class="hero-subtitle">Frontend Developer & Mahasiswa IT UPN "Veteran" Yogyakarta</p>
                
                <p class="hero-description">
                    Saya adalah mahasiswa semester 4 Jurusan Teknik Informatika yang bersemangat dalam menciptakan pengalaman web yang menarik dan responsif. Saya fokus pada pengembangan frontend dengan teknologi modern seperti React, Vue, dan JavaScript ES6+.
                </p>
                
                <div class="hero-btns">
                    <a href="#portfolio" class="btn">
                        <i class="fas fa-briefcase"></i> Lihat Portfolio
                    </a>
                    <a href="#contact" class="btn btn-outline">
                        <i class="fas fa-paper-plane"></i> Hubungi Saya
                    </a>
                </div>
            </div>
            
            <div class="hero-image">
                <div class="profile-container">
                    <!-- Gambar profil Anda -->
                    <img src="imegksc.jpeg" alt="Kevin Diaz Varel" class="profile-image" 
                         onerror="this.onerror=null; this.style.display='none'; 
                                  document.querySelector('.profile-fallback').style.display='block';">
                    
                    <!-- Fallback jika gambar tidak ditemukan -->
                    <div class="profile-fallback" style="display:none; text-align:center;color:white;padding:40px;width:100%;">
                        <i class="fas fa-user-circle" style="font-size:6rem;margin-bottom:20px;color:white;"></i>
                        <h3 style="color:white;margin-bottom:10px;">Kevin Diaz Varel</h3>
                        <p style="font-size:1.3rem;margin-bottom:5px;font-weight:600;">Frontend Developer</p>
                        <p style="margin-top:20px;font-size:0.9rem;color:rgba(255,255,255,0.8);">
                            UPN "Veteran" Yogyakarta
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <h2>Tentang Saya</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>Saya adalah mahasiswa semester 4 Jurusan Teknik Informatika di Universitas UPN "Veteran" Yogyakarta. Saya memiliki ketertarikan khusus dalam pengembangan frontend dan antarmuka pengguna yang intuitif.</p>
                    <p>Selama masa studi, saya telah mengembangkan berbagai proyek web baik secara individu maupun tim. Saya juga aktif mengikuti bootcamp dan webinar untuk mengasah kemampuan dalam teknologi frontend terkini.</p>
                    <p>Saat ini, saya sedang mencari kesempatan magang atau kerja paruh waktu sebagai Frontend Developer untuk menerapkan pengetahuan yang telah saya pelajari dan berkembang secara profesional.</p>
                    
                    <h3 style="margin-top: 40px;">Keterampilan Teknis</h3>
                    
                    <div class="skills-grid">
                        <div class="skill-card">
                            <i class="fab fa-html5 skill-icon" style="color: #e34f26;"></i>
                            <i class="fab fa-css3-alt skill-icon" style="color: #1572b6;"></i>
                            <h4>HTML/CSS</h4>
                            <p style="font-size: 0.95rem; color: var(--gray);">Semantic HTML, CSS3, Flexbox, Grid, Animations</p>
                        </div>
                        
                        <div class="skill-card">
                            <i class="fab fa-js-square skill-icon" style="color: #f7df1e;"></i>
                            <h4>JavaScript</h4>
                            <p style="font-size: 0.95rem; color: var(--gray);">ES6+, DOM Manipulation, Async/Await, APIs</p>
                        </div>
                        
                        <div class="skill-card">
                            <i class="fab fa-react skill-icon" style="color: #61dafb;"></i>
                            <h4>React</h4>
                            <p style="font-size: 0.95rem; color: var(--gray);">Components, Hooks, Context API, React Router</p>
                        </div>
                        
                        <div class="skill-card">
                            <i class="fab fa-vuejs skill-icon" style="color: #4fc08d;"></i>
                            <h4>Vue.js</h4>
                            <p style="font-size: 0.95rem; color: var(--gray);">Vue 3, Composition API, Vuex, Vue Router</p>
                        </div>
                        
                        <div class="skill-card">
                            <i class="fas fa-palette skill-icon" style="color: #ff6b6b;"></i>
                            <h4>UI/UX Design</h4>
                            <p style="font-size: 0.95rem; color: var(--gray);">Figma, Wireframing, Prototyping, User Research</p>
                        </div>
                        
                        <div class="skill-card">
                            <i class="fab fa-git-alt skill-icon" style="color: #f1502f;"></i>
                            <h4>Git & Version Control</h4>
                            <p style="font-size: 0.95rem; color: var(--gray);">GitHub, GitLab, Branching, Pull Requests</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio">
    <div class="container">
        <h2>Portfolio Saya</h2>
        <p style="text-align:center;max-width:800px;margin:0 auto 40px;">Berikut adalah beberapa proyek yang telah saya kembangkan selama studi dan pembelajaran mandiri.</p>
        
        <div class="portfolio-grid">
            <div class="portfolio-item">
                <div class="portfolio-img">
                    <div style="width:100%;height:200px;background:linear-gradient(135deg, #f093fb 0%, #f5576c 100%);display:flex;align-items:center;justify-content:center;color:white;">
                        <i class="fas fa-book" style="font-size:3rem;"></i>
                    </div>
                </div>
                <div class="portfolio-info">
                    <span class="portfolio-category">Web Baca Komik</span>
                    <h3>Webtoon Clone</h3>
                    <p>Website untuk membaca komik dengan berbagai genre seperti Action, Horror, Romance, dan lainnya. Dilengkapi dengan sistem user management dan bookmark.</p>
                    <div class="project-tech">
                        <span class="tech-tag">HTML</span>
                        <span class="tech-tag">CSS</span>
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">MySQL</span>
                    </div>
                    <a href="#" class="btn" style="width:100%;text-align:center;">Lihat Detail</a>
                </div>
            </div>
            
            <div class="portfolio-item">
                <div class="portfolio-img">
                    <div style="width:100%;height:200px;background:linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);display:flex;align-items:center;justify-content:center;color:white;">
                        <i class="fas fa-weight" style="font-size:3rem;"></i>
                    </div>
                </div>
                <div class="portfolio-info">
                    <span class="portfolio-category">Kontrol Berat Badan</span>
                    <h3>BMI Calculator</h3>
                    <p>Aplikasi web untuk menghitung Body Mass Index (BMI) berdasarkan berat dan tinggi badan, dengan klasifikasi kategori kesehatan dan rekomendasi.</p>
                    <div class="project-tech">
                        <span class="tech-tag">HTML</span>
                        <span class="tech-tag">CSS</span>
                        <span class="tech-tag">JavaScript</span>
                        <span class="tech-tag">PHP</span>
                    </div>
                    <a href="Bmikalku.php" class="btn" style="width:100%;text-align:center;">Lihat Demo</a>
                </div>
            </div>
            
            <div class="portfolio-item">
                <div class="portfolio-img">
                    <div style="width:100%;height:200px;background:linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);display:flex;align-items:center;justify-content:center;color:white;">
                        <i class="fas fa-cloud-sun" style="font-size:3rem;"></i>
                    </div>
                </div>
                <div class="portfolio-info">
                    <span class="portfolio-category">Dashboard Cuaca</span>
                    <h3>Weather Dashboard</h3>
                    <p>Dashboard cuaca dengan data real-time dari OpenWeather API. Visualisasi grafik, prakiraan 7 hari, dan lokasi favorit.</p>
                    <div class="project-tech">
                        <span class="tech-tag">JavaScript</span>
                        <span class="tech-tag">Chart.js</span>
                        <span class="tech-tag">Weather API</span>
                        <span class="tech-tag">LocalStorage</span>
                    </div>
                    <a href="#" class="btn" style="width:100%;text-align:center;">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Hubungi Saya</h2>
            <p>Saya terbuka untuk peluang magang, proyek freelance, atau diskusi tentang teknologi frontend. Jangan ragu untuk menghubungi saya!</p>
            
            <div class="contact-container">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3>Email</h3>
                            <p>kevinkdf002@gmail.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h3>WhatsApp</h3>
                            <p>+62 813 2115 0030</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3>Lokasi</h3>
                            <p>Cirebon, Indonesia</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-university"></i>
                        </div>
                        <div>
                            <h3>Pendidikan</h3>
                            <p>UPN "Veteran" Yogyakarta</p>
                            <p>Teknik Informatika - Semester 4</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subjek" required>
                        </div>
                        
                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Pesan" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn" style="width:100%;">
                            <i class="fas fa-paper-plane"></i> Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-logo" style="font-size:2rem;font-weight:800;color:white;margin-bottom:20px;">
                Kevin<span style="color:var(--secondary);">.</span>
            </div>
            
            <p style="max-width:400px;margin:0 auto 30px;color:#cbd5e1;">Frontend Developer & Mahasiswa Teknik Informatika UPN "Veteran" Yogyakarta</p>
            
            <div class="social-links">
                <a href="#" class="social-link">
                    <i class="fab fa-github"></i>
                </a>
                <a href="#" class="social-link">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#" class="social-link">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="social-link">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 Kevin Diaz Varel. Portofolio Frontend Developer.</p>
                <p>Dibuat dengan HTML, CSS, dan JavaScript.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navLinks = document.querySelector('.nav-links');
        
        mobileMenuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            mobileMenuBtn.querySelector('i').classList.toggle('fa-bars');
            mobileMenuBtn.querySelector('i').classList.toggle('fa-times');
        });
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                mobileMenuBtn.querySelector('i').classList.add('fa-bars');
                mobileMenuBtn.querySelector('i').classList.remove('fa-times');
            });
        });
        
        // Form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Terima kasih! Pesan Anda telah dikirim. Saya akan membalas segera.');
            this.reset();
        });
        
        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>