@include('partials.header')


<h1>Books</h1>
<ul>
    @foreach ($book as $book)
    <li>{{$book}}</li>
        
    @endforeach
</ul>

@include('partials.footer')
