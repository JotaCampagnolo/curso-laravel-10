@extends('admin.layouts.app')

@section('title', 'Supports')

@section('content')
<h1>Listagem dos Tópicos</h1>

<a href="{{ route('supports.create') }}">Novo Tópico</a>

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th>Ações</th>
    </thead>
    <tbody>
        @foreach($supports->items() as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ getStatusSupport($support->status) }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    <a href="{{ route('supports.show', $support->id) }}">+ detalhes</a>
                    <a href="{{ route('supports.edit', $support->id) }}">editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<x-pagination
    :paginator="$supports"
    :appends="$filters"
/>
@endsection
