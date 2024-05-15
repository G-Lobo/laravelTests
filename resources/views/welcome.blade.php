<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />



</head>

<body>

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>


    <label class="form-label font-weight-bold">Job Description</label>
    <div id="quill-editor" class="mb-3" style="height: 300px;">
        </div>
            <textarea rows="3" class="mb-3 d-none" name="description" id="quill-editor-area"></textarea>

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

</body>

</html>
