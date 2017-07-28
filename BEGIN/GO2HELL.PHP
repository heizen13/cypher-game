<html>
<head>
<title>TWO DIRECTION</title>
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
    if($answer =='SIGN'){
      echo "GOOD JOB BRUH!! GALING MO BRUH..... HAYUP KA! JOKE!
      <pre>
      level 3 <a href='3IDIOTS.PHP'> 3IDIOTS.PHP</a>
      </pre>

      ";
    }
    else{
      echo "ERROR BRUH!! WRONG ANSWER BRUH!! TRY AGAIN BRUH!! BRUH!!";
    }

  }
  ?>

<pre style="font-size:20px;">

  Hello! I'm Pennie and this is Pepper.
  I think we're lost.
  Can you guide us where we go?

goes to W 1 time,
goes to S 1 time,
goes to E 1 time,
goes to S 1 time,
goes to W 1 time

goes to N 2 times

goes to W 1 time,
goes to S 2 time,
goes to E 1 time,
goes to N 1 time,
goes to W 1 time


goes to N 2 times,
goes to SE 2 times,
goes to N 2 times

</pe>

</div>
</body>
</html>
