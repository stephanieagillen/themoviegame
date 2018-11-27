

@extends('layouts.app')
 
@section('content')
<example-component></example-component>
<games></games>

 <div>
  @{{ message }}
</div>
<div>
test
</div>

@endsection


<script>

var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!'
  }
});
</script>