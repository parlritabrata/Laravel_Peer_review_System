<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peer Review Assesment</title>
    <style>
        @import 'https://fonts.googleapis.com/css?family=Ubuntu:400,500,600,700,800';

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            background-color: #fff;
            font-family: Ubuntu, 'Open Sans', sans-serif;
        }

        #header-container {
            position: relative;
        }

        li {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        .container {
            width: 100%;
            max-width: 1000px;
            margin: 50px auto;
        }

        #header {
            position: sticky;
            top: 0;
            left: 0;
            min-height: 75px;
            padding: 0px 20px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #fff;
            width: 100%;
            z-index: 1000;
        }

        @media (max-width: 600px) {
            #header {
                flex-wrap: wrap;
            }
        }

        #img-container {
            width: 100%;
        }

        @media (max-width: 650px) {
            #img-container {
                margin-top: 15px;
                width: 50%;
                position: relative;
                display: block;
            }
        }

        #header-img {
            width: 20%;
            height: 100%;
            max-width: 300px;
            display: block;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-left: 20px;
        }

        @media (max-width: 650px) {
            #header-img {
                margin: 0 auto;
                width: 40%;
                height: auto;
            }
        }

        @media (max-width: 650px) {
            #nav-bar {
                margin-top: 10px;
                width: 100px;
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                padding: 0 50px;
            }
        }

        nav li {
            padding-bottom: 5px;
        }

        nav>ul {
            width: 40vw;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            padding: 0 15px;
        }

        @media (max-width: 650px) {
            nav>ul {
                flex-direction: column;
            }
        }

        nav ul li a {
            padding: 15px;
            color: rgb(12, 12, 50);
            font-weight: 600;
            transition: ease-in-out .2s;
        }

        nav ul li a:hover {
            border-bottom: rgb(12, 12, 50) solid 5px;
        }

        @media(max-width: 650px) {
            nav ul li a {
                display: block;
                padding: 0;
                background-color: rgba(5, 5, 5, 0.6);
                width: 100%;
            }
        }

        #hero-section {
            background: url("https://journalistsresource.org/wp-content/uploads/2021/05/audit-4576720_1920-860x466.jpg") scroll no-repeat center;
            height: auto;
            width: 100%;
            z-index: -1;
        }

        #dark {
            background-color: rgba(0, 0, 0, 0.45);
            height: 100%;
            width: 100%;
            padding: auto;
        }

        #dark #container {
            color: white;
            text-align: center;
            font-size: 3.5rem;
            max-width: 1000px;
            margin: auto auto;
            padding: 6rem 5rem;
            font-variant: small-caps;
        }

        @media (max-width: 650px) {
            #dark>#container {
                font-size: 1.5rem;
                padding: 2rem;
            }
        }

        section.container h1 {
            text-align: center;
            margin-top: 25px;
            text-transform: uppercase;
            padding: 25px 0;
            color: rgb(12, 12, 50);
        }

        .img-gallery-container {
            display: flex;
            flex-wrap: wrap;
            padding: 10px;
        }

        .img-gallery {
            flex: 23%;
            max-width: 25%;
            padding: 10px;
            margin: 5px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
            transition: .3s ease-in;
        }

        .img-gallery:hover {
            transform: scale(1.01);
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.4), 0 12px 40px 0 rgba(0, 0, 0, 0.38);
            cursor: pointer;
            color: rgb(12, 12, 50);
            font-weight: 500;
        }

        @media (max-width: 800px) {
            .img-gallery {
                flex: 46%;
                max-width: 50%;
            }
        }

        @media (max-width: 550px) {
            .img-gallery {
                flex: 100%;
                max-width: 100%;
            }
        }

        .img-gallery>img {
            width: 100%;
            height: auto;
            background-clip: cover;
        }

        #projects:not[h1] {
            margin-top: 50px;
            display: flex;
            justify-content: center;
        }

        #projects>iframe {
            display: block;
            margin: auto;
            max-width: 560px;
            width: 70%;
        }

        #projects p {
            text-align: center;
            font-style: italic;
        }

        #form input[type='email'] {
            width: 100%;
            padding: 10px;
        }

        #form input[type='submit'] {
            width: 100%;
            height: auto;
            margin: 15px 0;
            border: 0;
            background-color: rgb(12, 12, 50);
            color: #fff;
            padding: 10px;
        }

        footer {
            background-color: rgb(0, 0, 0);
            padding: 10px;
            text-align: center;
            color: #fff;
        }
    </style>
</head>

<body>
    <header id="header">
        <div id="img-container">
            <img id="header-img" src="https://i.ibb.co/RHn850J/Screenshot-2024-09-18-105435-removebg-preview.png"
                alt="E-learning Logo">
        </div>
        <nav id="nav-bar">
            <ul>
                <li><a class="nav-link" href="#landing">Top</a></li>
                <li><a class="nav-link" href="#courses">Courses</a></li>
                <li><a class="nav-link" href="#projects">Projects</a></li>
                <li><a class="nav-link" href="#contact">Contact Us</a></li>
                <li><a class="nav-link" href="/login">Login/Register</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="landing">
            <div id="hero-section">
                <div id="dark">
                    <div id="container">
                        <h1>Peer Review Application</h1>
                    </div>
                </div>
            </div>
        </section>
        <section id="courses" class="container">
            <h1>Courses We Offer</h1>
            <div class="img-gallery-container">
                <figure class="img-gallery">
                    <img src="https://miro.medium.com/v2/resize:fit:1400/1*cG6U1qstYDijh9bPL42e-Q.jpeg"
                        alt="Business Course Image">
                    <figcaption class="desc">
                        <p>Mechine Learning</p>
                    </figcaption>
                </figure>
                <figure class="img-gallery">
                    <img src="https://www.almondsolutions.com/images/blog-ui-ux-150223.jpg"
                        alt="Data Science Course Image">
                    <figcaption class="desc">
                        <p>Ui&Ux Design</p>
                    </figcaption>
                </figure>
                <figure class="img-gallery">
                    <img src="https://www.naukri.com/campus/career-guidance/wp-content/uploads/2023/11/what-is-data-science.jpg"
                        alt="Computer Engineering Course Image">
                    <figcaption class="desc">
                        <p>Data Science</p>
                    </figcaption>
                </figure>
                <figure class="img-gallery">
                    <img src="https://5.imimg.com/data5/HX/RE/GLADMIN-28603109/creative-design-500x500.png"
                        alt="Design Course Image">
                    <figcaption class="desc">
                        <p>Creative Design</p>
                    </figcaption>
                </figure>
            </div>
        </section>
        <section id="projects" class="container">
            <h1>Student Projects</h1>
            <p>Explore some of the outstanding projects by our students!</p>
            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="autoplay; encrypted-media"
                allowfullscreen></iframe>
        </section>
        <section id="contact" class="container">
            <h1>Contact Us</h1>
            <form id="form">
                <input type="email" name="email" placeholder="Enter your email">
                <input type="submit" value="Subscribe">
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Peer Review Application. All rights reserved.</p>
    </footer>
</body>

</html>
