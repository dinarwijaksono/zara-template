@extends('./layout/main')

@section('main-section')
    <h1>Form Group</h1>

    <section class="box border-l-4 border-green-600">
        <div class="box-header mb-4">
            <h3>Form Simple</h3>
        </div>

        <div class="box-body">

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="username">
            </div>

            <div class="form-group">
                <label for="country">Negara</label>
                <select id="country">
                    <option>-- select --</option>
                    <option>Indonesia</option>
                    <option>Argentina</option>
                </select>
                <p class="error">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, sit!</p>
            </div>

            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea id="descirption" rows="3"></textarea>
            </div>

            <div class="form-group flex justify-end">
                <div class="basis-2/12">
                    <button class="btn-primary w-full">Kirim</button>
                </div>
            </div>

        </div>
    </section>

    <section class="box border-l-4 border-green-600">
        <div class="box-title">
            <h2>Button</h2>
        </div>

        <div class="box-body">

            <div class="form-group">
                <button type="button" class="btn-primary w-full">Kirim</button>
            </div>

            <div class="form-group">
                <button type="button" class="btn-danger w-full">Kirim</button>
            </div>

            <div class="form-group">
                <button type="button" class="btn-info w-full">Kirim</button>
            </div>

            <div class="form-group">
                <button type="button" class="btn-success w-full">Kirim</button>
            </div>
        </div>
    </section>
@endsection
