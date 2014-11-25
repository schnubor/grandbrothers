@if($errors->any())
  <div class="alert alert-danger">
    <h3 style="margin-top: 0;">Whoops!</h3>
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif