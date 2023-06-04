<h1>Editando o Tópico {{ $support->id }}</h1>

<x-alert/>

<form action="{{ route('supports.update', $support->id) }}" method="POST">
    @method('put')
    @include('admin.supports.partials.form', [
        'support' => $support
    ])
</form>
