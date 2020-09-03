<a href="{{ route('paste.create') }}">Создать пост</a>
<div>
@foreach($posts as $post)
    <ul>
        <li>
            <a href="{{ route('paste.show',$post) }}">{{ $post->name }}</a>
            {{ $post->updated_at }}
        </li>
    </ul>
@endforeach
</div>
<h1>Замутим постик</h1>
<form action="{{ route('paste.store') }}"  method="post">
    @csrf
    <textarea name="paste"></textarea>
    <input name="name" type="text">
    <input type="submit" value="создать пост">
</form>
