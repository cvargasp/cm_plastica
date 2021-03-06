<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Normal Price</th>
        <th>Promotion Price</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($promotions as $promotion)
      <tr>
        <td>{{$promotion['id']}}</td>
        <td>{{$promotion['name']}}</td>
        <td>{{$promotion['normal_price']}}</td>
        <td>{{$promotion['promotion_price']}}</td>
        <td>{{$promotion['description']}}</td>
        
        <td><a href="{{action('PromotionController@edit', $promotion['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('PromotionController@destroy', $promotion['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>