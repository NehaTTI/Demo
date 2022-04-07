<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Import Export Excel & CSV to Database in Laravel 7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

  <div class="card">
    <div class="card-header">
               {{-- <a href="{{route('setproductprice')}}" class="btn btn-primary float-right">Set Product Price</a>          --}}
          </div>
    <div class="card-body">
    {{-- <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>SR NO</th>
          <th>PRODUCT</th>
          <th>PRICE</th>
          <th>STOCK</th>
          
        </tr>
      </thead>
      <tbody>
        <?php
        $i=1;
        foreach($product as $pro) { ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td>{{$pro->DESCRIPTION}}</td>
          <td>{{$pro->price}}</td>
          <td>{{$pro->stock}}</td>
          
      
        </tr>
        <?php $i++; }?>
      </tbody>
    </table> --}}
  </div>
  <form action="{{ route('importproduct') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Data</button>
                <a class="btn btn-warning" href="{{ route('exportproduct') }}">Export Data</a>
            </form>
            <p>You can download demo csv file from here: <a href="/empty.csv">Demo CSV File</a>.</p>
  </div>
  </html>

{{-- @endsection --}}

