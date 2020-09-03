<h1>Замутим постик</h1>
<form action="{{ route('paste.store') }}"  method="post">
    @csrf
    <textarea name="paste"></textarea>
    <input name="name" type="text">
    <input type="submit" value="создать пост">
</form>

