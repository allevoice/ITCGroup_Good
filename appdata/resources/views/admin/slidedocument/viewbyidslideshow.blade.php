@extends('template.thermadmin')

@section('title', 'Home')

@section('admincontenent')
    <div class="col-md-12">
        <h2>
            Slides Shows {{$value->title}}
            <a href="{{route('slideview')}}" class="btn btn-md btn-primary"><i class="glyphicon glyphicon-arrow-left"></i></a>




            {{$value->langues}}
            {{$value->indice_lg}}



            <span href="#" class="btn btn-sm btn-primary" title="update">fr <!--id+indice--></span>
            <span href="#" class="btn btn-sm btn-warning" title="Creer">fr <!--id+indice--></span>

            <span href="#" class="btn btn-sm btn-primary" title="update">en <!--id+indice--></span>
            <span href="#" class="btn btn-sm btn-warning" title="Creer">en <!--id+indice--></span>


            <span href="#" class="btn btn-sm btn-primary" title="update">cr <!--id+indice--></span>
            <span href="#" class="btn btn-sm btn-warning" title="Creer">cr <!--id+indice--></span>

            <span href="#" class="btn btn-sm btn-primary" title="Update">es <!--id+indice--></span>
            <span href="#" class="btn btn-sm btn-warning" title="Creer">es <!--id+indice--></span>



        </h2>


        <div class="form-inline">
            <div class="form-group">

                    @if ($value->imgslide == NULL)
                        <img src="{{asset('public/assets/img/slideshow/home-banner2.jpg')}}" class="img-thumbnail" style="width: 50%">
                    @else
                        <img src="{{asset('public/assets/img/slideshow/')}}/{{$value->imgslide}}" class="img-thumbnail" style="width: 50%">
                    @endif



                    @if ($value->imglogo == NULL)
                        <img src="{{asset('public/assets/img/slideshow/small-logo.png')}}" class="img-circle" style="width: 20%">
                    @else
                        <img src="{{asset('public/assets/img/slideshow/')}}/{{$value->imglogo}}" class="img-circle" style="width: 20%">
                    @endif

            </div>
        </div>




        <div class="form-horizontal">

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Titre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$value->titleview}}" readonly>
                </div>
            </div>


            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Contenue</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{$value->contentsd}}</textarea>
                </div>
            </div>



            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">link</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  value="{{$value->link}}">
                </div>
            </div>



        </div>

            <div class="form-inline">
                 <div class="form-group col-md-12">

                    <div class="col-md-4">
                        <label>
                            <span>Statut</span>
                            <span class="btn-info">{{$value->status}}</span>
                        </label>
                    </div>

                    <div class="col-md-4">
                        <label>
                            <span>level</span>
                            <span class="btn-info">{{$value->level}}</span>

                        </label>
                    </div>

                    <div class="col-md-4">
                        <label>
                            <span>Langues</span>
                            <span class="btn-info"> {{$value->langues}}</span>

                        </label>
                    </div>
                 </div>
            </div>

        <div class="form-inline">
            <div class="form-group col-md-12">

                <div class="col-md-4">
                    <label>
                        <span>Creation </span>
                        <span class="btn-info">{{$value->created_at}}</span>
                    </label>
                </div>

                <div class="col-md-4">
                    <label>
                        <span>Mise a Jours</span>
                        <span class="btn-info">{{$value->updated_at}}</span>

                    </label>
                </div>

                <div class="col-md-4">
                    <label>
                        <span>Supression</span>
                        <span class="btn-info"> {{$value->deleted_at}} </span>
                    </label>
                </div>
            </div>
        </div>



    </div>



@endsection
