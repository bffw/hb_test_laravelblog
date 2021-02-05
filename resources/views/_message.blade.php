<div class="container">
@foreach (['success', 'danger'] as $msg)
@if (session()->has($msg))
<div class="alert alert-{{ $msg }}">
<ul>
 <li> {{ session()->get($msg) }}</li>
</ul>
</div>
@endif

@endforeach
</div>