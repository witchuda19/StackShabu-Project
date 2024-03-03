@extends('layout')
    
@section('content')
     
<div class="row">
    @foreach($menus as $menu)
        <div class="col-xs-18 col-sm-6 col-md-4" style="margin-top:10px;">
            <div class="img_thumbnail menulist">
                <img src="{{ asset('image') }}/{{ $menu->photo }}" class="img-fluid">
            <div class="caption">
                <h4>{{ $menu->menu_name }}</h4>
                <p>{{ $menu->menu_description }}</p>
                <p><strong>Price: </strong> ${{ $menu->price }}</p>
                <p class="btn-holder">
                    <p class="btn-holder"><a href="{{ route('add_to_cart', $menu->id) }}" class="btn btn-primary btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
     
@endsection

                </p>
            </div>
        </div>
    @endforeach
</div>
     
@endsection
