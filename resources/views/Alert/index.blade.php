@extends('./layout/main')

@section('main-section')
    <h1>Alert</h1>

    <div class="alert-danger">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam, iure.</p>

        <div class="alert-header">
            <button type="button">Tutup</button>
        </div>
    </div>

    <div class="alert-success">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam, iure.</p>

        <div>
            <button type="button">Tutup</button>
        </div>
    </div>
@endsection
