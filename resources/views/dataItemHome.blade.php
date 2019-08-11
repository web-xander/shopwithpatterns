<div class="product-img">
    <img src="{{$article->image}}" alt="">
</div>
<div class="product-body">
    <p class="product-category">{{$article->category}}</p>
    <h3 class="product-name">
        <a href="/product/{{$article->id}}">{{$article->name}}</a>
    </h3>
    <h4 class="product-price">{{$article->price}}</h4>
</div>