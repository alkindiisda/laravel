@extends('example.master')
@section('content')
    <div class="row-fluid">
        <div class="span12">
            <div class="row-fluid page-404">
                <div class="span5 number">
                    404
                </div>
                <div class="span7 details">
                    <h3>Opps, You're lost.</h3>
                    <p>
                        We can not find the page you're looking for.<br />
                        Is there a typo in the url? Or try the search bar below.
                    </p>
                    <form action="#">
                        <div class="input-append">
                            <input class="m-wrap" size="16" type="text" placeholder="keyword..." />
                            <button class="btn blue">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @stop
