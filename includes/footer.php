            <div class="box" id="footer">  
                <div class="foot-details">
                    <p> © 2021  All Rights Reserved, Abdallah Mahmoud (SW Engineer)</p>
                </div>
            </div>
        </div>
    <script   src="js/mainapp.js" type="text/javascript"></script>
    <script   src="js/jquery-3.2.1.min.js" type="text/javascript"></script>   
    <script>
        let img = new Image(); // create obj of Image()
        let canvas = document.querySelector(".canlogocls"); // Reference for canvas 
        let ctx = canvas.getContext("2d"); /// get ref of the Draw context fun
        img.src = 'img/logofv.png'; /// embed the src of the logo-img
        img.onload = function () {

        // set size  to image
        canvas.height = canvas.width * (img.height / img.width);

         canvas.width = img.width * 0.45;
        canvas.height = img.height * 0.35;
        canvas.style.margin = "0 0 0 10px";;
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
       
        }
     
    </script>      
    </body>  
</html>