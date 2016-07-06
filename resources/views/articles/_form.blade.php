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
    {!! Form::input('date', 'published_at', $article->published_at, ['class' => 'form-control']) !!}

{{--    {!! Form::input('date', 'published_at', $article->published_at->format('Y-m-d'), ['class' => 'form-control']) !!}--}}
{{--    {!! Form::input('date', 'published_at', null, ['class' => 'form-control']) !!}--}}
{{--    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}--}}

</div>

<div class="form-group">
    {!! Form::label('tag_list', 'Tags:') !!}
    {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}

{{--    {!! Form::label('tags', 'Tags:') !!}--}}
{{--    {!! Form::select('tags', ['defaults'], null, ['class' => 'form-control', 'multiple']) !!}--}}
{{--    {!! Form::select('tags[]', $tags, [1, 4], ['class' => 'form-control', 'multiple']) !!}--}}
{{--    {!! Form::select('tags[]', $tags, $article->tagsList(), ['class' => 'form-control', 'multiple']) !!}--}}

</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

@section('footer')

    <script>
        $('#tag_list').select2({
            placeholder: 'Choose a tag',
        });

//        $('#tag_list').select2({
//            placeholder: 'Choose a tag',
//            tags: true,
//            data: [
//                { id: 'one', text: 'One' },
//                { id: 'two', text: 'Two' },
//            ]
//        });

//        $('#tag_list').select2({
//            placeholder: 'Choose a tag',
//            tags: true,
//            ajax: {
//                dataType: 'json',
//                url: 'api/tags',
//                delay: 250,
//                data: function (params) {
//                    return {
//                        q: params.term
//                    }
//                },
//                processResult: function (data) {
//                    return {result: data})
//                }
//            }
//        });

//        $('#tag_list').select2({
//            placeholder: 'Choose a tag',
//            tags: true,
//            ajax: {
//                datatype: 'json',
//                url: 'tags.json',
//                processResult: function (data) {
//                    return { results: data }
//                }
//
//            }
//        });

    </script>

@endsection