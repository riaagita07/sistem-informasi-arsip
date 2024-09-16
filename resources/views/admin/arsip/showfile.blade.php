<!DOCTYPE html>
<html>

<head>
    <title>File Arsip</title>
</head>

<body>
    <h1>File Arsip </h1>
    @if (in_array($ext, ['png', 'jpg', 'jpeg', 'gif']))
        <img src="{{ Storage::url($arsip->file) }}" alt="{{ Storage::url($arsip->file) }}">
    @else
        <object data="{{ Storage::url($arsip->file) }}" type="application/pdf" width="100%" height="1000px">
            <p>Unable to display PDF file. <a href="{{ Storage::url($arsip->file) }}">Download</a> instead.
            </p>
        </object>
    @endif

</body>

</html>
