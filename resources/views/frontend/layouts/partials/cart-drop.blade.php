@if(count(\Cart::getContent()) > 0)
    @foreach(\Cart::getContent() as $item)
        <li class="list-group-item">
            <div class="row">
                
                <div class="col-lg-12">
                    <b>{{$item->name}}</b>
                    <p>Qty: {{$item->quantity}}</p>
                    <p>Price: ${{ \Cart::get($item->id)->getPriceSum() }}</p>
                </div>
                
            </div>
        </li>
    @endforeach
    <br>
    <li class="list-group-item">
        <div class="row">
            <div class="col-lg-12">
                <b>Total: </b>${{ \Cart::getTotal() }}
            </div>
            <div class="col-lg-12">
                <form action="{{ route('cart.clear') }}" method="POST">
                    {{ csrf_field() }}
                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </form>
            </div>
        </div>
    </li>
    <br>
    <div class="row" style="margin: 0px;">
        <a class="btn btn-success" href="{{ route('cart') }}">
            Cart 
        </a>
        <a class="btn btn-primary" href="{{route('checkout')}}">
            Checkout 
        </a>
    </div>
@else
    <li class="list-group-item">Your Cart is Empty</li>
@endif