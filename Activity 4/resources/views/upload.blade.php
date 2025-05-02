<!DOCTYPE html>
<html>
<head>
    <title>Laravel Image Upload (Single + Multiple)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h1, h2 {
            margin-top: 30px;
        }

        form {
            margin-bottom: 30px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 20px;
        }

        .photo-card {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
        }

        .photo-card img {
            width: 100%;
            height: auto;
            border-radius: 4px;
        }

        .photo-card form {
            margin-top: 10px;
        }

        .photo-card button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 4px;
        }

        .photo-card button:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <h1>Single Image Upload</h1>
    <form action="{{ route('photos.store.single') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" required>
        <button type="submit">Upload</button>
    </form>

    <h1>Multiple Image Upload</h1>
    <form action="{{ route('photos.store.multiple') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="images[]" multiple required>
        <button type="submit">Upload</button>
    </form>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <h2>Uploaded Images</h2>
    <div class="grid">
        @foreach ($photos as $photo)
            <div class="photo-card">
                <img src="{{ asset('images/'.$photo->image) }}" alt="Uploaded Photo">
                <form action="{{ route('photos.destroy', $photo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        @endforeach
    </div>

    <div style="margin-top: 30px;">
        {{ $photos->links() }}
    </div>
</body>
</html>
