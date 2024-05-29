<x-layout>
    <h3>Blog</h3>

    @foreach ($posts as $post)
        <p>{{$post['title']}}</p>
    @endforeach
</x-layout> 