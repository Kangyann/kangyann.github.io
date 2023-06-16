<?php
$data = json_decode(file_get_contents("assets/script/data.json"), true);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="description" content="Project,Portofolio,Single Website">
    <meta name="keywords" content="Kangyann, Portofolio, Project">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="https://svgshare.com/i/jmv.svg" type="image/x-icon">
    <title>Kangyann</title>
</head>

<body>
    <div class="content">
        <!--  -->
        <div class="navbar sticky-top">
            <div class="home d-flex align-items-baseline">
                <i class="fa-solid fa-house fa-xl"></i>
                <a href="#">KANGYANN</a>
            </div>
            <div class="linked">
                <a href="#page">Page</a>
                <a href="#project">Project</a>
                <a href="#about">About</a>
            </div>
            <div class="icon">
                <i class="fa-brands fa-github fa-xl"></i>
                <i class="fa-brands fa-instagram fa-xl mx-2"></i>
                <i class="fa-brands fa-discord fa-xl"></i>
            </div>
            <div class="menu mx-3">
                <i class="fa-solid fa-bars" data-bs-toggle="offcanvas" href="#menu" style="cursor: pointer;"> </i>
                <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="menu"
                    aria-labelledby="offcanvasScrollingLabel">
                    <div class="offcanvas-header">
                        <div class="d-flex align-items-center" style="border-bottom: 2px solid var(--primary);">
                            <h2>Menu</h2>
                            <button type="button" class="btn-close mx-2" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="offcanvas-body">
                        <a href="#home" style="font-size: 14px;">Beranda</a><br>
                        <a href="#project" style="font-size: 14px;">Project</a><br>
                        <a href="#about" style="font-size: 14px;">About Me</a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="page text-center d-flex justify-content-center align-items-center flex-column min-vh-100" id="page">
            <div class="page-item">
                <span id="writer"></span><br>
                <span>Hello everyone, welcome to my website, my name is Dian,
                    <br>I hope you all like it.
                </span><br>
                <div class="mt-3">
                    <a href="https://wa.me/6283829055059/">Contact</a>
                    <a href="">Blog</a>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="project d-flex justify-content-center min-vh-100">
            <div class="project-item text-center" id="project">
                <h2>It's My Project Owned</h2>
                <div class="d-flex flex-wrap justify-content-center gap-4 mt-4">
                    <?php
                    for($i = 0 ; $i < count($data); $i++) {
                        echo '<div class="project-column position-relative">
                        <div class="images">
                            <img src="'.$data[$i]['image'].'" alt="">
                        </div>
                        <div class="text">
                            <span>
                                '.$data[$i]['text'].'
                            </span><br>
                            <div class="check">
                                <a href="'.$data[$i]['link'].'">Check</a>
                            </div>
                        </div>
                    </div>'; 
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="about d-flex justify-content-center text-center mt-5 min-vh-100" id="about">
            <div class="about-item">
                <h2>Let's Check My Profile</h2>
                <div class="about-profile  d-flex justify-content-center flex-column align-items-center">
                    <div class="images">
                        <img src="assets/images/profile.jpg" alt="">
                    </div>
                    <div class="text">
                        <span>Hello introduce my name is Dian, I'm from the
                            city
                            of Kuningan, West Java,I'm a Fresh
                            Graduate.<br>
                            I hope that in the future I can be like all of you friends who want to Study Web Development
                            and
                            Do Work.</span>
                    </div>
                    <div class="skill  mt-05 d-flex flex-column w-75 px-2">
                        <div class="skill-program">
                            <div class="d-flex justify-content-between">
                                <span>HTML</span>
                                <span>90%</span>
                            </div>
                            <input type="range" name="" id="" max="100" min="0" value="70"
                                style="  background-size: 90% 100%;" disabled data-aos="fade-right"
                                data-aos-delay="200">
                        </div>
                        <div class="skill-program">
                            <div class="d-flex justify-content-between">
                                <span>CSS</span>
                                <span>80%</span>
                            </div>
                            <input type="range" name="" id="" max="100" min="0" value="70"
                                style="  background-size: 80% 100%;" disabled data-aos="fade-right"
                                data-aos-delay="200">
                        </div>
                        <div class="skill-program">
                            <div class="d-flex justify-content-between">
                                <span>JAVASCRIPT</span>
                                <span>70%</span>
                            </div>
                            <input type="range" name="" id="" max="100" min="0" value="70"
                                style="  background-size: 70% 100%;" disabled data-aos="fade-right"
                                data-aos-delay="200">
                        </div>
                        <div class="skill-program">
                            <div class="d-flex justify-content-between">
                                <span>PHP</span>
                                <span>50%</span>
                            </div>
                            <input type="range" name="" id="" max="100" min="0" value="70"
                                style="  background-size: 50% 100%;" disabled data-aos="fade-right"
                                data-aos-delay="200">
                        </div>
                        <div class="mt-5 cv">
                            <a href="#">Download CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="assets/script/typewriter.js"></script>
<script>
    let a = new Typed("#writer", {
        strings: ["Welcome Everyone", "This My Website", "Kangyann Page"],
        typeSpeed: 50,
        backSpeed: 25,
        loop: false
    })
    AOS.init();
</script>

</html>