

<center><canvas id="canvas"></canvas></center>

 <script type="application/javascript">



     // Инициализация переменных
     function init() {
         canvas = document.getElementById("canvas");
         context = canvas.getContext('2d');
         canvas.width = 480; // задаём ширину холста
         canvas.height = 320; // задаём высоту холста

         draw();
     }
     // Отрисовка игры
     function draw() {
         context.fillStyle = "#000";
         context.fillRect(0, 0, 480, 320);
     }
     $(document).ready(init());

setTimeout(serg,1000);
     function serg()
     {
         context.fillStyle = "#fff";
         context.fillRect(0+5,0+5,5+5,5+5);
     }

 </script>