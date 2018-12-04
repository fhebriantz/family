            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-xs-3 marginbottomx">
                        <div class="brandambasador">
                            <?php 
                            use Illuminate\Http\Request;
                            use App\Http\Controllers\Controller;
                            use App\Http\Model\About;
                            use App\Http\Model\Images;
                            use App\Http\Model\Widget;
                            use Illuminate\Support\Facades\Redirect;
                            use Illuminate\Foundation\Application;
                            use vendor\autoload;

                            $ambassador = Images::where('flag','=',8)->first();
                            $sponsor1 = Images::where('flag','=',9)->first();
                            $sponsor2 = Images::where('flag','=',10)->first();
                            $sponsor3 = Images::where('flag','=',11)->first();
                            $sponsor4 = Images::where('flag','=',12)->first();
                            $sponsor5 = Images::where('flag','=',13)->first();
                             ?>
                            <img src="{{ asset('/asset/img/'.$ambassador->namefile)}}" alt="kak seto">
                        </div>
                    </div>
                    <div class="col-sm-5 col-xs-9 marginbottomx mobilepading">
                        <div class="form-question">

                            @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <p style="color: blue">{{ session('berhasil')}}</p>
                            <form method="POST" action="{{url('/question/input')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>{{trans('footer.question')}}</label>
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="question" name="question" class="form-control" placeholder="question">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-info" name="submit" value="submit" style="float: right" type="submit">
                                </div>                                
                            </form>
                        </div>
                        <div class="social-media">
                            <a href=""><img src="{{ asset('assets/img/fb.png')}}"></a>
                            <a href=""><img src="{{ asset('assets/img/ig.png')}}"></a>
                            <a href=""><img src="{{ asset('assets/img/in.png')}}"></a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">

        <?php $instagram = App\Http\Model\Widget::all()->where('id','=',1)->first(); ?>
        <?php $youtube = App\Http\Model\Widget::all()->where('id','=',2)->first(); ?>
                        <div class="widget">
                            <p class="instamobile marginbottom"><strong>INSTAGRAM</strong></p>
                            {!! $instagram->embed_text !!}
                        </div>
                        <div class="widget">
                            <p class="instamobile marginbottom"><strong>YOUTUBE</strong></p>
                            <div class="video-container">
                                {!! $youtube->embed_text !!}
                            </div>
                        </div>
                        <div class="sponsor">  
                            <div class="col-xs-2">
                                <img src="{{ asset('/asset/img/'.$sponsor1->namefile)}}" class="sponsor1" alt="">
                            </div>
                            <div class="col-xs-2">
                                <img src="{{ asset('/asset/img/'.$sponsor2->namefile)}}" class="sponsor2" alt="">
                            </div>
                            <div class="col-xs-2">
                                <img src="{{ asset('/asset/img/'.$sponsor3->namefile)}}" class="sponsor3" alt="">
                            </div>
                            <div class="col-xs-2">
                                <img src="{{ asset('/asset/img/'.$sponsor4->namefile)}}" class="sponsor4" alt="">
                            </div>
                            <div class="col-xs-3">
                                <img src="{{ asset('/asset/img/'.$sponsor5->namefile)}}" class="sponsor5" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>