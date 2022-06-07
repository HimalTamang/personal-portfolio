<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/style.css">
        <title>Himal Tamang personal website portfolio</title>
    </head>

    <body>
        <div class="wrapper">
            <nav class="navbar">

                <div class="logo">My Portfolio</div>

                <div class="nav-list">
                    <ul class="nav-item">
                        <li class="nav-links">Home</li>
                        <li class="nav-links">Proejects</li>
                        <li class="nav-links">Blogs</li>
                        <li class="nav-links">Contact</li>
                    </ul>
                </div>

                <div class="hambargermenu">
                    <div class="hambargerline">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    <div class="social">
                        <img src="./imgs/twitter-logo.png" alt="hello">
                        <img src="./imgs/Insagram-logo.png" alt="hello2">
                    </div>
                </div>
            </nav>
            <!-- landing page html part -->
        <!-- <div class="main">
                <div class="ellipse1"></div>
                <div class="ellipse2"></div>
                <div class="ellipse3"></div>
                <div class="image"><img src="./imgs/himal-profile.png" alt="Himal Tamang"></div>
                <div class="content">
                    <h2>Himal Tamang</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, necessitatibus molestias
                        voluptatum sequi nesciunt, illum porro autem dicta blanditiis natus non consequuntur eos qui
                        incidunt reprehenderit? Fugiat minus ipsa officia. Lorem ipsum dolor sit amet consectetur,
                        adipisicing elit. Voluptatem explicabo nam ipsum sapiente, esse eum obcaecati tenetur
                        laudantium, temporibus officiis architecto cupiditate, consectetur quia nostrum! Sunt eius
                        exercitationem animi qui?</p>
                    <button class="btn">Read More</button>
                </div>
            </div>
            <div class="blogs">
                <div class="content1">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores consequuntur maxime blanditiis
                        commodi. Neque repudiandae quo doloribus impedit iste officia modi laudantium aliquid facilis
                        expedita obcaecati, voluptatem corporis fuga adipisci!. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Ipsum dolorem debitis iusto, quas itaque aut reprehenderit, nesciunt labore
                        adipisci vel ducimus earum sint cum culpa neque libero quam delectus autem.</p>
                </div>
                <div class="content2">
                    <img src="./imgs/himal-profile.png" alt="Himal">
                </div>
            </div>
            <div class="skills">
                <h2>skills
                    <hr>
                </h2>
                <ul class="skill-list">
                    <li><img src="./imgs/htmal-logo.png" alt="Himal" height="50" width="50"><span>HTML</span></li>
                    <li><img src="./imgs/css-logo.png" alt="Himal"><span>css</span></li>
                    <li> <img src="./imgs/javascript.png" alt="Himal"><span>JAVASCRIPT</span></li>
                    <li> <img src="./imgs/boostrap.png" alt="Himal"><span>BOOSTRAP</span></li>
                    <li> <img src="./imgs/php.png" alt="Himal"><span>PHP</span></li>
                </ul>
            </div>
            <div id="footer">
                <div class="contact">
                    <ul>
                        <li><img src="./node_modules/bootstrap-icons/icons/geo-alt-fill.svg" alt=""> Kathmandu, Nepal
                        </li>
                        <li><img src="./node_modules/bootstrap-icons/icons/envelope-fill.svg" alt="">
                            himalhobbs.364@gmail.com</li>
                        <li><img src="./node_modules/bootstrap-icons/icons/envelope-fill.svg" alt="">
                            upworkfreelancing1234@gmail.com</li>
                        <li><img src="./node_modules/bootstrap-icons/icons/person-circle.svg" alt=""> 9819707364</li>
                        <li> <img src="./node_modules/bootstrap-icons/icons/person-circle.svg" alt=""> 9803604734</li>
                    </ul>
                </div>
                <div class="copyright">
                    <p> @all copyrights 2022 reserved by Himal Tamang</p>
                </div>
            </div> -->
        </div>


        <script>
        const hamburgermenu = document.querySelector(".hambargermenu");
        const nav_items = document.querySelector(".nav-item");

        hamburgermenu.addEventListener("click", () => {
            hamburgermenu.classList.toggle("active");
            nav_items.classList.toggle("active");
            social_media_icons.classList.toggle("active");
        })
        
        </script>

    </body>

</html>
