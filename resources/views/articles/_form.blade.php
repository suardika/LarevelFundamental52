<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at', 'Publish On:') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{{--    {!! Form::label('tags', 'Tags:') !!}--}}
{{--    {!! Form::select('tags', ['defaults'], null, ['class' => 'form-control', 'multiple']) !!}--}}
{{--    {!! Form::select('tags[]', $tags, [1, 4], ['class' => 'form-control', 'multiple']) !!}--}}
{{--    {!! Form::select('tags[]', $tags, $article->tagsList(), ['class' => 'form-control', 'multiple']) !!}--}}

    {!! Form::label('tag_list', 'Tags:') !!}
    {!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control', 'multiple']) !!}

</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>