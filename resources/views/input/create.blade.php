
@extends('welcome')


@section('content')

teste quill e DB


<form action="/input" method="POST">
@csrf

    {{-- <textarea name="content" id="" cols="30" rows="10"></textarea> --}}

    <label class="form-label font-weight-bold" for="content">Job Description</label>
    <div id="quill-editor" class="mb-3" style="height: 300px;">
    </div>
    <textarea rows="3" class="mb-3 hidden" name="content" id="quill-editor-area"></textarea>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                if (document.getElementById('quill-editor-area')) {
                    var editor = new Quill('#quill-editor', {
                        theme: 'snow'
                    });
                    var quillEditor = document.getElementById('quill-editor-area');
                    editor.on('text-change', function() {
                        quillEditor.value = editor.root.innerHTML;
                    });

                    quillEditor.addEventListener('input', function() {
                        editor.root.innerHTML = quillEditor.value;
                    });
                }
            });
            </script>

<button type="submit" class="rounded-md bg-green-600">criar</button>
</form>


@endsection
