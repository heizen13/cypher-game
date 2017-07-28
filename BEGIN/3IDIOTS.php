<html>
<head>
<title>ANG INA NI HENYO</title>
</head>
<body style="background-color:black;margin:50px;">
<div style="text-align:center;color:white;">
  <form method="POST" action="">
  <input type="text" name="answer" value=""><br>
  <input type="submit" value="Submit">
  </form>
  <?php

  if(isset($_POST['answer'])){
    $answer = strtoupper($_POST['answer']);
    if($answer =='FIXED'){
      echo "GOOD JOB BRUH!! ANG GALING-GALING MO TALAGA BRUH..... INA KA! JOKE!
      <pre>
      level 4 <a href='4EVER.php'> 4EVER.php</a>
      </pre>

      ";
    }
    else{
      echo "ERROR BRUH!! WRONG ANSWER BRUH!! TRY AGAIN BRUH!! BRUH!!";
    }

  }
  ?>

<pre style="font-size:20px;">
I think there's something wrong with the image..
<img src="number-one.txt" alt="One">
</pre>

</div>
</body>
</html>
