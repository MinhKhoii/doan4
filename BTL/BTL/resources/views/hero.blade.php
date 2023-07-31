<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Danh mục</span>
                    </div>
                    <ul>
                        @foreach($loaisp as $lsp)
						    <li><a href="{{route('shopgrid',['id' => $lsp->id])}}">{{ $lsp ->TenLOp }}</a></li>
						@endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                Tất cả danh mục
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="Bạn cần gì?">
                            <button type="submit" class="site-btn">Tìm kiếm</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>Hỗ trợ thời gian 24/7</span>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->