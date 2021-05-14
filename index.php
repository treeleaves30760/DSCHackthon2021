<html>
  <head>
    <title>Chat Place</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script defer src = "./js/main.js"></script>
  </head>


  <body>
    <div class = "container">
      <div class="row">
        <div class="pb-3 col-9 bg-light">訊息</div>
        <div class="pb-3 col-3 ">發出時間</div>
      </div>
      <template id = "messagePart">
        <div class="container">
        <div class="row">
          <div class = "pb-3 col-9 bg-light textPP" id = "textPart"></div>
          <div class = "pb-3 col-3 timePart textPP" id = "timePart"></div><br>
        </div>
        </div>
        </template>
      <div class = "row g-0" id = "messageContainer">
        
      </div>
    </div>
    <div class = "flex">
    
    <!--<button type = "button" class = "submit"> 送出 </button>-->
    </div>

    <form action="./add.php" method="post">
      <input type = "text" name = "messageToSend"> 
      <input type = "submit" name="submit" value="送出" />
    </form>
    <script>
      
    </script>
  </body>
</html>
