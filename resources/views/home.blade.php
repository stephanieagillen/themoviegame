@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button @click="initAddGame()" class="btn btn-primary btn-xs pull-right">
                            + Add New Game
                        </button>
                        My Games
                    </div>
 
                    <div class="panel-body">
 
                    </div>
                </div>
            </div>
        </div>
 
        <div class="modal fade" tabindex="-1" role="dialog" id="add_game_model">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Add New Game</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" placeholder="Game Name" class="form-control"
                                   v-model="game.name">
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" cols="30" rows="5" class="form-control"
                                      placeholder="Game Description" v-model="game.description"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" @click="createGame" class="btn btn-primary">Submit</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
 
    </div>




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


<script>
    export default {
        data(){
            return {
                game: {
                    name: '',
                    description: ''
                },
                errors: []
            }
        },
        methods: {
            initAddGame()
            {
                this.errors = [];
                $("#add_game_model").modal("show");
            },
            createGame()
            {
                axios.post('/game', {
                    name: this.game.name,
                    description: this.game.description,
                })
                    .then(response => {
 
                        this.reset();
 
                        $("#add_game_model").modal("hide");
 
                    })
                    .catch(error => {
                        this.errors = [];
                        if (error.response.data.errors.name) {
                            this.errors.push(error.response.data.errors.name[0]);
                        }
 
                        if (error.response.data.errors.description) {
                            this.errors.push(error.response.data.errors.description[0]);
                        }
                    });
            },
            reset()
            {
                this.game.name = '';
                this.game.description = '';
            },
        }
    }
</script>
