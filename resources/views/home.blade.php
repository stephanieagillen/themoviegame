<!DOCTYPE html>
<html>
<head>
  <title></title>
 <script src="https://cdn.jsdelivr.net/npm/vue"></script>
</head>
<body>
  <div id="app">
  {{ message }}
</div>
</body>
</html>

<script>

var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!'
  }
});
</script>


