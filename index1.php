<?php 
    include "includes/header.php";
?>


    <img class="resim" src="alt resim.jpg" alt="resim">
    <br><br><br>


    </div class="container-fluid">
    <div class="row">
        <div class="col">
            <br><br><br>
            <div class="kutu">
                <br><br><br>
                <div class="kutuici">
                    <p>LET'S TALK</p>

                    <h1>Speak With Expert Engineers</h1>
                    <br>
                    <p class="orta"><strong>E-mail</strong> <br><a href="#" class="mail">support@gmail.com </a></p>
                    <br>
                    <p class="orta"><strong>Phone</strong> <br><a href="#" class="Phone">(123) 22 888</a></p>
                    <br>
                    <p class="orta"><strong>Adress</strong> <br> New Jesrsy, 1201, USA</p>

                </div>



            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <br><br><br>
            <form class="form-container" id="form">

                <p style="color: blue;">GET İN TOUCH</p>
                <h1>Fill The Form Below</h1>

                <br>

                <div class="row g-3">
                    <div class="col">
                        <input type="text" class="form-control" id="firstname" placeholder="First name"
                            aria-label="First name">
                        <b id="p1"></b>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="lastname" placeholder="Last name"
                            aria-label="Last name">
                        <b id="p2"></b>
                    </div>
                </div>

                <br>
                <div class="row g-3">
                    <div class="col">
                        <input type="text" class="form-control" id="email" placeholder="E-mail" aria-label="E-mail">
                        <b id="p3"></b>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="password" placeholder="Password"
                            aria-label="Password">
                        <b id="p4"></b>
                    </div>
                </div>
                <br>

                <div class="row g-3">
                    <div class="col">
                        <input type="text" class="form-control" id="phone-number" placeholder="Phone Numbar"
                            aria-label="Phone Numbar">
                        <b id="p5"></b>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="gender" placeholder="Gender" aria-label="Gender">
                        <b id="p6"></b>
                    </div>
                </div>
                <br>

                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                    placeholder="Your Message"></textarea>
                <b id="p7"></b>


                <br><br>
                <button type="submit" id="submit" class="btn-primary">submit now</button>
            </form>
        </div>

    </div>

    </div>
    <br><br><br><br>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.077407232642!2d90.4225270359951!3d23.780257730747458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7572b23f4e5%3A0xe26372e73a6832e7!2sRSTheme!5e0!3m2!1str!2str!4v1623823453473!5m2!1str!2str"
        width=100% height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


    <script src="javas.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
    include "includes/footer.php";
?> 