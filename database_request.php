<!DOCTYPE html>
<html>
    <head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"> </script>

</head>
    <body>
        <a id="aj" onclick="my('18itr004')">ajay</a><br>
        <!-- <a id="aj1" >ajay</a> -->
      <?php echo " <div id='aj_'> ajay is </div>";?>
      <script type ="text/javascript">
      function my(str){
                document.getElementById("aj_").innerHTML = str;
               }
         $("#aj").click(function()
         {
             $("#aj_").load(" #aj_");
         });


            </script>
            <script>
               
                </script>
    </body>
    </html>