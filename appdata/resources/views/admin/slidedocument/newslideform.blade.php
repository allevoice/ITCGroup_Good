@extends('template.thermadmin')

@section('title', 'Home')

@section('admincontenent')
    <div class="col-md-12">
        <h2>
            New Insert Slides Shows
            <a href="{{route('slideview')}}" class="btn btn-md btn-primary"><i class="glyphicon glyphicon-arrow-left"></i></a>            
        </h2>

        <form method="post" action="{{route('insertslideform')}}" enctype="multipart/form-data">
        @csrf

            <div class="form-group">
                <div class="col-sm-6 @error('slide') is-invalid @enderror">
                    <input class="form-control col-sm-6" type="file" name="slide">
                    <span id="helpBlock" class="help-block"><strong>Slide</strong>   Accept les format suivant PNG, JPG, JPEG...</span>
                   @error('slide')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-sm-6 @error('logo') is-invalid @enderror">
                    <input class="form-control col-sm-6" type="file" name="logo">                    
                    <span id="helpBlock" class="help-block"><strong>Logo</strong> Accept les format suivant PNG, JPG</span>
                    @error('logo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        



        <div class="form-horizontal col-sm-12">

            <div class="form-group @error('titlev') is-invalid @enderror">
                <label for="inputEmail3" class="col-sm-2 control-label">Titre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="titlev" value="{{old('titlev')}}" placeholder="Titre De l'info bulble">
                    @error('titlev')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="form-group @error('descdetail') is-invalid @enderror">
                <label for="inputEmail3" class="col-sm-2 control-label">Contenue</label>
                <div class="col-sm-10">
                    <textarea class="form-control"  rows="3" name="descdetail" placeholder="Votre contenu" >{{old('descdetail')}}</textarea>
                    @error('descdetail')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group @error('linkv') is-invalid @enderror">
                <label for="inputEmail3" class="col-sm-2 control-label">link</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="linkv" value="{{old('linkv')}}" placeholder="url du site">
                    @error('linkv')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

            <div class="form-inline">
                 <div class="form-group col-md-12">

                    <div class="col-md-6">
                        <label>
                            <span>Statut</span>
                            <select class="form-control" name="stv">
                                <option value="1">Active</option>
                                <option value="" selected>Desactive</option>
                            </select>

                        </label>
                    </div>


                    <div class="col-md-6">
                        <label>
                            <span>Langues</span>
                            <span class="btn-info"> en</span>
                        </label>
                    </div>
                 </div>
            </div>

            <div class="form">
            <div class="form-group col-md-12">

                <div class="col-md-6 center">
                    <label>
                        <a href="{{route('slideview')}}" class="btn btn-danger" type="button">Retour</a>
                    </label>
                </div>

                <div class="col-md-6">
                <label>
                        <input class="form-control btn-primary" type="submit" name="send" value="Ajout">
                    </label>
                </div>

            </div>
        </div>

        </form>
    </div>



@endsection