<div class="portlet">
    <div class="portlet-title">
        <b>Tampilan Transaksi dari : {{ $data->id}} - {{$data->transaction_date}}</b>
    </div>
    <div class="portlet-body">
        <div class="row">
            @foreach($products as $dp)
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="">
                    <div class="caption">
                        <p><b>{{$dp->generic_name}}</b></p>
                s        <hr/>
                        <p>Kategori : {{$dp->category->name}}</p>
                        <p>Harga: Rp. {{$dp->price}}</p>
                        <p>Jumlah Beli {{$dp->pivot->quantity}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>