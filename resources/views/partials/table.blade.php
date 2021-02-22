<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Company</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($companies as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->company}}</td>
            <td>
                <a class="btn btn-success" href="/editCompany/{{$item->id}}">Edit</a>
            </td>
            <td>
                <a class="btn btn-info" href="/showCompany/{{$item->id}}">Details</a>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>