<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portofolio</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    {{-- Header --}}
    <nav class="navbar">
        <div class="title-container">
            <div class="title">My Portfolio</div>
        </div>
        <div class="item-container">
            <div class="nav-item active"><a href="#banner">Home</a></div>
            <div class="nav-item"><a href="#skills">Skills</a></div>
            <div class="nav-item"><a href="#experience">Experience</a></div>
            <div class="nav-item"><a href="#project">Project</a></div>
            <div class="nav-item"><a href="#about-me">About Me</a></div>
        </div>
        <div class="btn">
            <button class="waButton">Hire Me</button>
        </div>
    </nav>

    {{-- Banner --}}
    <section class="banner" id="home">
        <div class="container">
            <div class="profile-desc">
                <div class="profile-title">
                    <h2>Hi There 👋</h2>
                    <h1>I'm <span class="name-highlight">Tangguh Dipantara </span></h1>
                </div>
                <div class="work-title">
                    <div class="horizontal-line"></div>
                    <p>Product Developer | Web Developer</p>
                </div>
                <div class="banner-button">
                    <div class="btn" id="download-cv">
                        <button>Download CV</button>
                    </div>

                    <div class="btn-secondary">
                        <button>Download Portofolio</button>
                    </div>
                </div>
            </div>
            <div class="profile-picture">
                <img src="img/profile-picture.png" alt="">
            </div>
        </div>
    </section>

    {{-- What Do I Do --}}
    <section class="wdid">
        <div class="wdid-title">
            <h1>What Do I Do?</h1>
        </div>
        <div class="line-section"></div>
        <div class="wdid-content">
            <div class="wdid-item">
                <p class="item-title">Product Developer</p>
                <p>Bertanggung jawab merealisasikan ide produk dari konsep awal hingga peluncuran, mengelola seluruh
                    siklus pengembangan, dan memastikan kualitas produk akhir.</p>
            </div>
            <div class="wdid-item">
                <p class="item-title">Web Developer</p>
                <p>Profesional yang membangun, membuat, dan memelihara situs web dan aplikasi web (baik front-end
                    tampilan pengguna maupun back-end logika server), memastikan fungsionalitas dan pengalaman pengguna.
                </p>
            </div>
            <div class="wdid-item">
                <p class="item-title">IT Consultant</p>
                <p>Penasihat strategis yang membantu organisasi menganalisis masalah bisnis dan merekomendasikan serta
                    mengimplementasikan solusi teknologi (sistem, infrastruktur, perangkat lunak) untuk meningkatkan
                    efisiensi.</p>
            </div>
        </div>
    </section>

    {{-- Skills --}}
    <section class="skills" id="skills">
        <div class="skills-title">
            <h1>Skills</h1>
            <div class="line-section"></div>
        </div>
        <div class="skills-content">
            <div class="skills-item">
                <p class="item-title">Figma</p>
            </div>
            <div class="skills-item">
                <p class="item-title">Adobe XD</p>
            </div>
            <div class="skills-item">
                <p class="item-title">Adobe Photoshop</p>
            </div>
            <div class="skills-item">
                <p class="item-title">Maze</p>
            </div>
            <div class="skills-item">
                <p class="item-title">Miro</p>
            </div>
            <div class="skills-item">
                <p class="item-title">HTML</p>
            </div>
            <div class="skills-item">
                <p class="item-title">CSS</p>
            </div>
            <div class="skills-item">
                <p class="item-title">Bootstrap</p>
            </div>
            <div class="skills-item">
                <p class="item-title">Communication</p>
            </div>
            <div class="skills-item">
                <p class="item-title">Collaboration</p>
            </div>
            <div class="skills-item">
                <p class="item-title">Office 365</p>
            </div>
            <div class="skills-item">
                <p class="item-title">Leadership</p>
            </div>
            <div class="skills-item">
                <p class="item-title">Public Speaking</p>
            </div>
        </div>
    </section>

    {{-- Experience --}}
    <section class="experience" id="experience">
        <div class="experience-title">
            <h1>Experience</h1>
            <div class="line-section"></div>
        </div>
        <div class="experience-content">
            <table class="table">
                <tr>
                    <td style="font-weight: bold">
                        Lacretive Agency
                    </td>
                    <td style="text-align: end">Aug 2018 - Dec 2018</td>
                </tr>
                <tr>
                    <td style="padding-bottom: 0.7em">Web Designer - Intern</td>
                    <td style="text-align: end; padding-bottom: 0.7em">Jakarta, Indonesia</td>
                </tr>
                <tr>
                    <td style="padding-bottom: 2em">
                        <ul style="padding-left: 3%">
                            <li>Research what kind of design is needed by the company's business</li>
                            <li>Create an interface that is comfortable to look at and use and responsive</li>
                            <li>Collaborate with the backend so that the display can be easily integrated</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold">
                        Lacretive Agency
                    </td>
                    <td style="text-align: end">Aug 2018 - Dec 2018</td>
                </tr>
                <tr>
                    <td style="padding-bottom: 0.7em">Web Designer - Intern</td>
                    <td style="text-align: end; padding-bottom: 0.7em">Jakarta, Indonesia</td>
                </tr>
                <tr>
                    <td style="padding-bottom: 2em">
                        <ul style="padding-left: 3%">
                            <li>Research what kind of design is needed by the company's business</li>
                            <li>Create an interface that is comfortable to look at and use and responsive</li>
                            <li>Collaborate with the backend so that the display can be easily integrated</li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td style="font-weight: bold">
                        Lacretive Agency
                    </td>
                    <td style="text-align: end">Aug 2018 - Dec 2018</td>
                </tr>
                <tr>
                    <td style="padding-bottom: 0.7em">Web Designer - Intern</td>
                    <td style="text-align: end; padding-bottom: 0.7em">Jakarta, Indonesia</td>
                </tr>
                <tr>
                    <td>
                        <ul style="padding-left: 3%">
                            <li>Research what kind of design is needed by the company's business</li>
                            <li>Create an interface that is comfortable to look at and use and responsive</li>
                            <li>Collaborate with the backend so that the display can be easily integrated</li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
    </section>

    {{-- Projects --}}
    <section class="projects" id="project">
        <div class="projects-title">
            <h1>Selected Project</h1>
            <div class="line-section"></div>
        </div>
        <div class="projects-content">
            <div class="project-slide active">
                <div class="project-content-left">
                    <p class="project-content-left-title">CRM Web Design</p>
                    <p class="project-content-left-subtitle">CRM Web Design is a project that involves developing a
                        digital
                        platform for customer relationship
                        management, which requires carefull design and implementation.</p>
                    <div class="btn">
                        <button>More Detail</button>
                    </div>
                </div>
                <div class="project-content-right">
                    <div class="project-images">
                        <img src="img/crm-dashboard.jpg" class="project-image">
                    </div>
                </div>
            </div>
            <div class="project-slide">
                <div class="project-content-left">
                    <p class="project-content-left-title">CRM Web Design 2</p>
                    <p class="project-content-left-subtitle">CRM Web Design is a project that involves developing a
                        digital
                        platform for customer relationship
                        management, which requires carefull design and implementation.</p>
                    <div class="btn">
                        <button>More Detail</button>
                    </div>
                </div>
                <div class="project-content-right">
                    <div class="project-images">
                        <img src="img/crm-dashboard.jpg" class="project-image">
                    </div>
                </div>
            </div>
            <div class="project-slide">
                <div class="project-content-left">
                    <p class="project-content-left-title">CRM Web Design 3</p>
                    <p class="project-content-left-subtitle">CRM Web Design is a project that involves developing a
                        digital
                        platform for customer relationship
                        management, which requires carefull design and implementation.</p>
                    <div class="btn">
                        <button>More Detail</button>
                    </div>
                </div>
                <div class="project-content-right">
                    <div class="project-images">
                        <img src="img/crm-dashboard.jpg" class="project-image">
                    </div>
                </div>
            </div>
            <div class="slider-buttons">
                <button data-slide="1" class="active"></button>
                <button data-slide="2"></button>
                <button data-slide="3"></button>
            </div>
        </div>
    </section>

    {{-- Work With Me? --}}
    <section class="wwm">
        <div class="wwm-container">
            <div class="wwm-title">
                <p>Have a project or want to work with me?</p>
            </div>
            <div class="wwm-content">
                <p>Please contact me by clicking the button below</p>
            </div>
            <div class="btn">
                <button class="waButton">Hire Me</button>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="footer" id="about-me">
        <div class="footer-left-section">
            <p>&copy; 2024 Tangguh. All rights reserved.</p>
        </div>
        <div class="footer-right-section">
            <i class="fa-brands fa-instagram"></i>
            <i class="fab fa-linkedin"></i>
            <i class="fas fa-envelope"></i>
        </div>
    </footer>
</body>

<script>
    // slide gallery
    const slideButtons = document.querySelectorAll('.slider-buttons button');
    const slides = document.querySelectorAll('.project-slide');

    slideButtons.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            slides.forEach(slide => slide.classList.remove('active'));

            slides[index].classList.add('active');

            slideButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
        });
    });

    // nav item active
    const navItems = document.querySelectorAll('.nav-item');

    navItems.forEach(item => {
        item.addEventListener('click', function() {
            navItems.forEach(i => i.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Download CV
    document.getElementById('download-cv').addEventListener('click', function() {
        const link = document.createElement('a');
        link.href = '/cv/CV_ATS.pdf';
        link.download = 'CV_ATS.pdf';
        link.click();
    });

    const buttons = document.querySelectorAll('.waButton');

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            window.open('https://wa.me/6281234567890', '_blank');
        });
    });
</script>

</html>
