@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Dashboard</div>
    <div class="panel-body">
        <form action="#">
            <div class="form-group">
                <label for="category_id">Categoría:</label>
                <select name="category_id" class="form-control">

                </select>
            </div>
            <div class="form-group">
                <label for="severity">Severidad:</label>
                <select name="severity" class="form-control">
                    <option value="M">Menor</option> 
                    <option value="N">Normal</option>
                    <option value="A">Alta</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Título:</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Registrar incidencia</button>
        </form>
    </div>
</div>
@endsection
