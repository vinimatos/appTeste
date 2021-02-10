@extends('layouts.app')

@section('content')
<div class="container">
    <div id="app">
        <index-component></index-component>
    </div>


    <div id="myModal" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                 <edit-component></edit-component>
            </div>
        </div>
    </div>
</div>
@endsection