<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $comic->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isbn') }}
            {{ Form::text('isbn', $comic->isbn, ['class' => 'form-control' . ($errors->has('isbn') ? ' is-invalid' : ''), 'placeholder' => 'Isbn']) }}
            {!! $errors->first('isbn', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('stock') }}
            {{ Form::text('stock', $comic->stock, ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('isbn') }}
            {{ Form::text('isbn', $comic->stock, ['class' => 'form-control' . ($errors->has('isbn') ? ' is-invalid' : ''), 'placeholder' => 'Isbn']) }}
            {!! $errors->first('isbn', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('issn') }}
            {{ Form::text('issn', $comic->stock, ['class' => 'form-control' . ($errors->has('issn') ? ' is-invalid' : ''), 'placeholder' => 'Issn']) }}
            {!! $errors->first('issn', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ean') }}
            {{ Form::text('ean', $comic->stock, ['class' => 'form-control' . ($errors->has('ean') ? ' is-invalid' : ''), 'placeholder' => 'Ean']) }}
            {!! $errors->first('ean', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('upc') }}
            {{ Form::text('upc', $comic->stock, ['class' => 'form-control' . ($errors->has('upc') ? ' is-invalid' : ''), 'placeholder' => 'Upc']) }}
            {!! $errors->first('upc', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>