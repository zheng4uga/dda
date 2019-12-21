@extends('layouts.index')
@section('page-title','DDA')

@section('content')
    <section class="hero is-large dda-homepage-hero">
        <div class="hero-body has-text-centered">
            <div class="container">
                <h1 class="title has-text-weight-bold has-text-white is-uppercase">Directional Drilling Company</h1>
                <h3 class="subtitle has-text-weight-bold has-text-white is-capitalize">Check if we service your county</h3>
                <div class="columns">
                    <div class="column is-4 is-offset-4">
                    <form>
                        <div class="typeahead__container">
                            <div class="typeahead__field">
                                <div class="typeahead__query">
                                    <input class="js-typeahead"
                                        name="q"
                                        autocomplete="off">
                                </div>
                                <div class="typeahead__button">
                                    <button type="submit">
                                        <span class="typeahead__search-icon"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
    <!--                     <div class="field">
                            <div class="control has-icons-right">
                                <input class="input county is-medium" type="text" id="county" placeholder="County">
                                <span class="icon is-medium is-right">
                                    <i class="fas fa-search"></i>                                
                                </span>
                            </div>
                        </div> -->
                    </div>           
                </div>
            </div>
        </div>
    </section>
@endsection

