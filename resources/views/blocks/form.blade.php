
{!! Form::label('name', 'Name') !!}
{!! Form::text('name', '', [
    'class' => 'form-control',
    'id' => 'name'
]) !!}

{!! Form::label('description', 'Description') !!}
{!! Form::textarea('description', '', [
    'class' => 'form-control',
    'id' => 'description'
]) !!}

{!! Form::label('photo', 'Photo') !!}
{!! Form::file('photo', [
    'class' => 'form-control',
    'id' => 'photo'
]) !!}

{!! Form::label('author_name', 'Author name') !!}
{!! Form::text('author_name', '', [
    'class' => 'form-control',
    'id' => 'author_name'
]) !!}

{!! Form::label('phone', 'Phone') !!}
{!! Form::text('phone', '', [
    'class' => 'form-control',
    'id' => 'phone'
]) !!}

{!! Form::label('active_date', 'Active date') !!}
{!! Form::text('active_date', '', [
    'class' => 'form-control',
    'id' => 'active_date',
]) !!}

{!! Form::label('status', 'Status') !!}
{!! Form::select('status',[
    'open' => 'open',
    'close' => 'close',
    'delete' => 'delete',
], '', [
    'class' => 'form-control'
]) !!}

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="/js/jquery.maskedinput.min.js"></script>
<script src="/js/ckeditor/ckeditor.js"></script>
<script>
    $('#phone').mask("(999) 999-9999");
    $( "#active_date" ).datepicker();
    CKEDITOR.replace('description');
</script>