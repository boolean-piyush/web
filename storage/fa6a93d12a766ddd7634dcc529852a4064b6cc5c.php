<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   <button type="button" onclick="showHide()">Access my account</button><br><br>
   <div id="company" style="display: none">
      <form action="/connect" method="get">
         <label>Company Name <input type="text" name="value"></label>
         <button type="submit">Login</button>
      </form>
   </div>
   <script>
      function showHide() {
         var x = document.getElementById("company");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      }
      </script>
</body>
</html>