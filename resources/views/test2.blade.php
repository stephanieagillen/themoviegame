@extends('layouts.app')
 
@section('content')
<example-component></example-component>
<game></game>

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