<footer class="footer-distributed footer " id="footer1" style="padding-top: 5px; padding-bottom: 5px; margin-top: 25px;">
    <div class="infoplus hidden-sm" id="upf"> <i class="fa fa-chevron-up fup" aria-hidden="true"></i></div>

    <div class="footer-left" style="margin-left: -15px;">

        <h3 style="font-size: 45px;">Paseo<span style="font-size: 45px;">Ciudad</span></h3>
        <p class="footer-company-name">Paseo Ciudad &copy; 2017</p>
    
    </div>
    <div class="footer-center" style="margin-top: 25px; margin-left: -5px;">
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:contacto@paseociudad.com">contacto@paseociudad.com</a></p>
        </div>
    </div>
    <div class="footer-right">
        <div class="footer-icons" style="margin-top: 12px; float: right;">

                <a href="#" ><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>

            </div>
    </div>
</footer>




 <footer class="footer-distributed footer hidden" id="footer2" >
        <div class="infoplus hidden-sm" id="downf"> <i class="fa fa-chevron-down fdown" aria-hidden="true"></i></div>
        <div class="footer-left" style="margin-left: -15px;">

            <h3 style="font-size: 45px;">Paseo<span style="font-size: 45px;">Ciudad</span></h3>

            <p class="footer-links">
                <a href="#">Home</a> ·
                <a href="#">Blog</a> ·
                <a href="#">Pricing</a> ·
                <a href="#">About</a> ·
                <a href="#">Faq</a> ·
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">Paseo Ciudad &copy; 2017</p>
        </div>

        <div class="footer-center" style="margin-top: 25px; margin-left: -5px;">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>21 Revolution Street</span> Amsterdam, Holland</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+1 555 123456</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:contacto@paseociudad.com">contacto@paseociudad.com</a></p>
            </div>

        </div>

        <div class="footer-right" style="margin-top: 12px; ">

            <p class="footer-company-about">
                <span>About the company</span> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
            </p>

            <div class="footer-icons">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
                
            </div>

        </div>
        
    </footer> 
    
    <style>
        .infoplus {
            position: absolute;
            height: 25px;
            width: 150px;
            margin-top: 20px;
            background-color: rgb(51, 56, 59);
            font-size: 13px;
            top: -15px;
            left: calc(50% - 75px);
            cursor: pointer;
            border-radius: 5px;
            /border-top-left-radius: 5px;
            /border-top-right-radius: 5px;
        }

        #upf.infoplus:before {
            content: 'Más información ';
            color: #fafafa;
            position: absolute;
            top: 3px;
            left: 15px;
        }
        #downf.infoplus:before {
            content: 'Más información ';
            color: #fafafa;
             position: absolute;
            top: 3px;
            left: 15px;
        }
        .fup {
            position: absolute;
            right: 5px;
            color: #fafafa;
            top: 3px;
        }
        .fdown {
            position: absolute;
            right: 5px;
            color: #fafafa;
            top: 3px;
        }

    </style>

    <script>
        $('#upf').click(function(){
            $('#footer2').removeClass('hidden');
            $('#footer1').addClass('hidden');
            $("body").animate({"scrollTop": window.scrollY+300}, 1000);
           

        });
        $('#downf').click(function(){
            $('#footer1').removeClass('hidden');
            $('#footer2').addClass('hidden');
            $("body").animate({"scrollTop": window.scrollY-1});

        });
    </script>