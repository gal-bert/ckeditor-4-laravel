<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CKEditor 4</title>
    <script src="https:cdn.ckeditor.com/4.20.1/full/ckeditor.js"></script>
</head>
<body>
    <h1>Classic editor</h1>

    <form action="/store" method="POST">
        @csrf
            <textarea name="content" id="editor" cols="30" rows="10">

            </textarea>

        <br>
        <button type="submit">Submit</button>
    </form>


    <script>

        CKEDITOR.replace( 'editor' );

    </script>
</body>
</html>

