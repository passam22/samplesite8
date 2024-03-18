<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body class="p-4">
<div>
    <form method="post" action="{{ url("qr") }}">
        @csrf
        <label class="form-label">Input Text:</label>
        <input type="text" class="form-control" name="qr_text"  autocomplete="off"/>

        <input type="submit" class="btn btn-primary mt-2" value="Generate QR"/>
    </form>

    @if($value!="")
        {!! QrCode::size(256)->generate($value) !!}
    @endif
</div>
</body>
</html>
