@extends('layouts.app')

@section('template_title')
    Comic
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Comic') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('comics.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                                <a class="btn btn-primary btn-sm float-right mr-4" id='compareBtn'  data-placement="left">
                                  {{ __('Compare comics') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                           
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Title</th>
										<th>Isbn</th>
										<th>Stock</th>
                                        <th>Isnn</th>
                                        <th>UPC</th>
                                        <th>EAN</th>


                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comics as $comic)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $comic->title }}</td>
											<td>{{ $comic->isbn }}</td>
											<td>{{ $comic->stock }}</td>
                                            <td>{{ $comic->issn }}</td>
                                            <td>{{ $comic->upc }}</td>
                                            <td>{{ $comic->ean }}</td>


                                            <td>
                                                <form action="{{ route('comics.destroy',$comic->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('comics.show',$comic->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('comics.edit',$comic->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $comics->links() !!}
            </div>
        </div>
    </div>
@endsection
