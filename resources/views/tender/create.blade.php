<div class="content">
    <div class="form-group">
        @include('blocks.navigate')
    </div>
    {!! Form::model('tender', [
        'route' => 'tender.store',
        'enctype' => 'multipart/form-data'
    ]) !!}

    @include('blocks.form')

    {!! Form::button('Add', [
        'class' => 'btn btn-info add-btn',
        'id' => 'addTender',
    ]) !!}

    {!! Form::close() !!}
</div>