<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Portfolio</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f1f5f9;
            color: #1e293b;
        }

        header {
            background: #0f172a;
            color: white;
            text-align: center;
            padding: 45px 20px;
        }

        header h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        nav {
            margin-top: 25px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 12px;
        }

        .container {
            max-width: 850px;
            margin: 30px auto;
            padding: 20px;
        }

        section {
            background: white;
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.06);
        }

        h2 {
            color: #2563eb;
            margin-bottom: 15px;
        }

        .skills span {
            display: inline-block;
            background: #dbeafe;
            color: #1d4ed8;
            padding: 10px 15px;
            margin: 5px;
            border-radius: 20px;
        }

        .project {
            margin-bottom: 15px;
        }

        footer {
            background: #0f172a;
            color: white;
            text-align: center;
            padding: 20px;
        }

        @media(max-width: 600px) {
            nav a {
                display: inline-block;
                margin: 8px;
            }
        }
    </style>
</head>

<body>

<header>
    <h1>Bosch Carl Pablo</h1>
    <p>IT Student | Future Web Developer</p>

    <nav>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<div class="container">

    <section id="about">
        <h2>About Me</h2>
        <p>
            Hello! I am an Information Technology student
            who enjoys learning about computers, programming,
            and modern technology. I am passionate about
            improving my skills and creating useful projects.
        </p>
    </section>

    <section id="skills">
        <h2>My Skills</h2>
        <div class="skills">
            <span>HTML</span>
            <span>CSS</span>
            <span>JavaScript</span>
            <span>PHP</span>
            <span>MySQL</span>
            <span>Networking</span>
        </div>
    </section>

    <section id="projects">
        <h2>My Projects</h2>

        <div class="project">
            <h3>Personal Portfolio</h3>
            <p>A website that introduces myself and my skills.</p>
        </div>

        <div class="project">
            <h3>Student Management System</h3>
            <p>A simple system for managing student information.</p>
        </div>

        <div class="project">
            <h3>Web Development Project</h3>
            <p>A website created using HTML, CSS, and PHP.</p>
        </div>
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <p>Email: pabloboschcarlvincent@gmail.com</p>
        <p>Facebook: Bosch Carl Pablo</p>
    </section>

</div>

<footer>
    <p>© 2026 My Personal Portfolio | All Rights Reserved</p>
</footer>

</body>
</html>