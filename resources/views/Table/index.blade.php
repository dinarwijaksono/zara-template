@extends('./layout/main')

@section('main-section')
    <h1>Table</h1>

    <section class="box">
        <div class="box-header">
            <h3>Table</h3>
        </div>

        <div>
            <table class="table-simple" aria-describedby="table">
                <thead>
                    <tr class="bg-slate-200">
                        <th class="w-[50px]">No</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th class="w-[140px]"></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Lorem, ipsum.</td>
                        <td class="text-right">Rp 10.000</td>
                        <td>
                            <button class="bg-primary w-full text-white py-1 px-2">Kirim</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </section>
@endsection
