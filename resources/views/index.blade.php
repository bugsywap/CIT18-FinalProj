@include('header')


<h1>Books</h1>
<ul>
    @foreach ($books as $book)
    <li>{{$book}}</li>
        
    @endforeach
</ul>

@include('footer')
