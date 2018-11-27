
 <script src="https://unpkg.com/vue@2.4.2"></script>

<example-component></example-component>
  <div id="app">
  {{ message }}
</div>


<script>

var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!'
  }
});
</script>