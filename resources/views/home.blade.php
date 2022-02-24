@extends('layouts.app')

@section('content')

<div class="container">
    <div class="d-flex bd-highlight mb-4">
        <div class="p-2 w-100 bd-highlight">
            <h2>Gerenciador de Tarefas</h2>           
        </div>
        <div class="p-2 flex-shrink-0 bd-highlight">
            <button class="btn btn-success" id="btn-add">
                Criar Tarefa
            </button>

        </div>

    </div>
<div>
    <table class="table table-inverse">
        <thead>
            <tr>
                <th>ID</th>
                <th>Autor</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody id="todo-list" name="todo-list">
            @foreach($todo as $data)
            <tr id="todo{{$data->id}}">
                <td>{{$data->id}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->description}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="modal fade" id="formModal" aria-hidden="true" role="dialog">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="formModalLabel">Criação de tarefa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body form-horizontal">
                <form id="myForm" name="myForm" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label>Autor</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Informe o nome" value="">
                    </div>
                    <div class="form-group">
                        <label>Tarefa</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Informe a descrição" value=""> 
                    </div>

                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btn-save" value="add">Salvar</button>
                    <input type="hidden" id="todo_id" name="todo_id" value="0">

                </div>

            </div>

        </div>

    </div>
    </div>
</div>

</div>

@endsection