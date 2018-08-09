<html>
<head>
<title>LET'S VOLT-IN</title>
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
    if($answer =='LUBID'){
      echo "YAH BRUH!!! BIGTI KA NA!! HAHA! JOKE! <BR/>

      <pre>
      Yah, you've completed all the letters...but it's that the right answer?      </pre>
      <span style='color:black'>Anagram</span>
      ";
    }
    else if($answer =='BUILD'){
      echo "WOW BRUH?!?! LUFFEEEET MO TALAGA!!!! INA KA BRUH!!!KAINIS KA NA!! HAHAHA!! BRUH?!?! <BR/>";
      echo "<pre>There's no new level for now. Wait for level 6 to come.</pre>";
    }
    else{
      echo "ERROR BRUH!! WRONG ANSWER BRUH!! TRY AGAIN BRUH!! BRUH!!";
    }

  }
  ?>

  <pre style="font-size:20px;">
  Again and again there's something wrong with this image..
  <img src="BORUTESU-ONE.TXT" alt="BORUTESU FAIIIIIBUUU!!!!!"><!-- !!!!!UUUBIIIIIAF USETUROB -->
  </pre>
</div>
</body>
</html>
