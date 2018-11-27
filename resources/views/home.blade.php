<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
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


