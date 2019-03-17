<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width">
    <title>KSTARK</title>
  </head>
  <body>
    <div class="mainBox">
      <div class="mainRow">
          <div class="element">
            <input type="button" onclick="fun(0,0)" value="START">
          </div>
          <div class="element1">
            <input type="button" onclick="fun(0,1)">
          </div>
          <div class="element1">
            <input type="button" onclick="fun(0,2)">
          </div>
          <div class="element1">
            <input type="button" onclick="fun(0,3)">
          </div>
          <div class="element1">
            <input type="button" onclick="fun(0,4)">
          </div>
          <div class="element1">
            <input type="button" onclick="fun(0,5)">
          </div>
      </div>
      <div class="mainRow">
          <div class="element">
            <input type="button" onclick="fun(1,0)">
          </div>
          <div class="element">
            <input type="button" onclick="fun(1,1)">
          </div>
          <div class="element">
            <input type="button" onclick="fun(1,2)">
          </div>
          <div class="element">
            <input type="button" onclick="fun(1,3)">
          </div>
          <div class="element">
            <input type="button" onclick="fun(1,4)">
          </div>
          <div class="element">
            <input type="button" onclick="fun(1,5)">
          </div>
      </div>
      <div class="mainRow">
          <div class="element">
            <input type="button" onclick="fun(2,0)">
          </div>
          <div class="element">
            <input type="button" onclick="fun(2,1)">
          </div>
          <div class="element">
            <input type="button" onclick="fun(2,2)">
          </div>
          <div class="element">
            <input type="button" onclick="fun(2,3)">
          </div>
          <div class="element">
            <input type="button" onclick="fun(2,4)">
          </div>
          <div class="element">
            <input type="button" onclick="fun(2,5)">
          </div>
        </div>
          <div class="mainRow">
              <div class="element">
                <input type="button" onclick="fun(3,0)">
              </div>
              <div class="element">
                <input type="button" onclick="fun(3,1)">
              </div>
              <div class="element">
                <input type="button" onclick="fun(3,2)">
              </div>
              <div class="element">
                <input type="button" onclick="fun(3,3)">
              </div>
              <div class="element">
                <input type="button" onclick="fun(3,4)">
              </div>
              <div class="element">
                <input type="button" onclick="fun(3,5)">
              </div>
          </div>
          <div class="mainRow">
              <div class="element">
                <input type="button"  onclick="fun(4,0)">
              </div>
              <div class="element">
                <input type="button" onclick="fun(4,1)">
              </div>
              <div class="element">
                <input type="button" onclick="fun(4,2)">
              </div>
              <div class="element">
                <input type="button" onclick="fun(4,3)">
              </div>
              <div class="element">
                <input type="button" onclick="fun(4,4)">
              </div>
              <div class="element2">
                <input type="button" onclick="fun(4,5)">
              </div>
          </div>
          <div class="mainRow">
              <div class="element">
                <input type="button" onclick="fun(5,0)">
              </div>
              <div class="element">
                <input type="button" onclick="fun(5,1)">
              </div>
              <div class="element">
                <input type="button" onclick="fun(5,2)">
              </div>
              <div class="element">
                <input type="button" onclick="fun(5,3)">
              </div>
              <div class="element">
                <input type="button" onclick="fun(5,4)">
              </div>
              <div class="element">
                <input type="button" onclick="fun(5,5)">
              </div>
          </div>
      </div>
    </div>
    <div class="formm">
      <form action="index.php" method="post">
        <input type="text" name="text" class="text">
        <input type="submit" name="" value="submit"  class="subButton" >
      </form>
      <button type="button" name="button" onclick="printList()" class="printButton">SETUP</button>

    </div>
<script type="text/javascript" src="main.js"></script>
</body>
<?php
if(isset($_POST['text']))
 {
  $list = $_POST['text'];
  $myfile = fopen("values.txt","wb") or die("Unable to open file!");
for ($j=0; $j <6 ; $j++) {
  for ($i=0; $i <6 ; $i++) {
    $k = (($j*6) +$i);
  fwrite($myfile,$list[$k]);
  if ($i<=4){
      fwrite($myfile," ");
    }
  }
  if ($j<=4){
      fwrite($myfile,"\r\n");
    }
}
    fclose($myfile);
  }
 ?>
</html>
