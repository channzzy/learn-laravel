<ul class="nav">
    @foreach ($navbar as $name => $url)
        <li><a href="{{ $url }}">{{ $name }}</a></li>
    @endforeach
</ul>