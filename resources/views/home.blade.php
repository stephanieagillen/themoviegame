@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                <button type="button" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#favoritesModal">
                  Create New Game
                </button>
                    @if (session('status'))
                        <div class="alert alert-success mt-5" role="alert">
                           <p>{{ session('status') }}</p>
                        </div>
                    @endif

                    You are logged in!
                </div>
                

                <div class="modal fade" id="favoritesModal" 
                     tabindex="-1" role="dialog" 
                     aria-labelledby="favoritesModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" 
                          data-dismiss="modal" 
                          aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" 
                        id="favoritesModalLabel">The Sun Also Rises</h4>
                      </div>
                      <div class="modal-body">
                        <p>
                        Please confirm you would like to add 
                        <b><span id="fav-title">The Sun Also Rises</span></b> 
                        to your favorites list.
                        </p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" 
                           class="btn btn-default" 
                           data-dismiss="modal">Close</button>
                        <span class="pull-right">
                          <button type="button" class="btn btn-primary">
                            Add to Favorites
                          </button>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
