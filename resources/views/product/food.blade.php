<!-- Product tab -->
<div class="col-md-12">
        <div id="product-tab">
            <!-- product tab nav -->
            <ul class="tab-nav">
                <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
                <li><a data-toggle="tab" href="#tab2">Details</a></li>
            </ul>
            <!-- /product tab nav -->

            <!-- product tab content -->
            <div class="tab-content">
                <!-- tab1  -->
                <div id="tab1" class="tab-pane fade in active">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
                <!-- /tab1  -->

                <!-- tab2  -->
                <div id="tab2" class="tab-pane fade in">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Ingredientes</h3>
                            @foreach ($article->details['ingredients'] as $ingredient)
                                <p>{{$ingredient['name']}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- /tab2  -->
            </div>
            <!-- /product tab content  -->
        </div>
    </div>
    <!-- /product tab -->