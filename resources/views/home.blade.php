<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <div id="app">
  <h1>{{ age * 2 }}</h1>
</div>
</body>
</html>

<script>

new Vue({
  el: '#app',
  data: {
    age: 27,
    name: 'Bo Andersen'
  }
});
</script>


