@extends('layouts.app')

@section('title', 'Athletic Prospects | Profile')

@section('content')
    <div class="jumbotron col-md-7 ml-auto mr-auto">
        <h1 class="display-4">
            Dale Moore
{{--            {{$user->name}}--}}
{{--            @if(!auth::guest())--}}
{{--                @if(auth::user()->id == $player->id or auth::user()->role == 'admin')--}}
                    {{-- hide edit button if not your profile and you aren't an admin --}}
                    <a class="btn btn-secondary" href="/players/1/edit">Edit</a>
{{--                @endif--}}
{{--            @endif--}}
        </h1>
        <h4>Grace Academy</h4>
        <hr>
        <h2 class="display-5"></h2>
        <div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">
                                <img src="/images/userimages/baseball.jpg" cclass="col-sm-4 img-fluid" style="max-width:300px" alt="Player Profile Image">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Player Info</h5>
                            @if(true)
{{--                            @if($player->id == 1 or $player->id == 2)--}}
                                <p class="card-text"><span class="profile-labels">Gender:</span> Male<p>
                                <p class="card-text"><span class="profile-labels">Cell Phone:</span> 555-121-1212 <p>
                                <p class="card-text"><span class="profile-labels">Home Phone:</span> 555-111-1212 <p>
                            @endif
                            <p class="card-text"><span class="profile-labels">Email: </span><a href="mailto:">dmoore092@gmail.com</a><p>
                            <p class="card-text"><span class="profile-labels">Address:</span> 115 Murphy Street<p>
                            <p class="card-text"><span class="profile-labels">City:</span> Rochester <p>
                            <p class="card-text"><span class="profile-labels">State:</span> New York<p>
                            <p class="card-text"><span class="profile-labels">Zip:</span> 14586 <p>
                            <p class="card-text"><span class="profile-labels">Class of:</span> 2014 <p>
                            <p class="card-text"><span class="profile-labels">Height:</span> 5' 10''<p>
                            <p class="card-text"><span class="profile-labels">Weight:</span> 210 <p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sport Info</h5>
                            <p class="card-text"><span class="profile-labels">Sport:</span> Football</p>
                            <p class="card-text"><span class="profile-labels">Primary Position:</span> Left Tackle </p>
                            <p class="card-text"><span class="profile-labels">Secondary Position:</span> Center</p>
                            <p class="card-text"><span class="profile-labels">Travel Team:</span> Grace Academy </p>
                            <p class="card-text"><span class="profile-labels">GPA:</span> 3.65</p>
                            <p class="card-text"><span class="profile-labels">ACT:</span> 15</p>
                            <p class="card-text"><span class="profile-labels">SAT:</span> 1400</p>
                            <p class="card-text"><span class="profile-labels">Facebook:</span> dmoore092 </p>
                            <p class="card-text"><span class="profile-labels">Instagram:</span> dmoore092 </p>
                            <p class="card-text"><span class="profile-labels">Twitter:</span> @dmoore092</p>
                            <p class="card-text"><span class="profile-labels">Commitment:</span>  </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <small>When you become committed to a college, please send us an email at <a href="mailto:kprestano@athleticprospects.com">kprestano@athleticprospects.com</a> </small>
        </div>
        @if(true)
            <hr>
            <div>
                <h4>Videos</h4>
                <div class="row">
                    @if(true)
                        <div class="col-sm-4">
                            <div class="card">
                                <iframe allowfullscreen type='text/html' src="https://www.youtube.com/embed/ImtZ5yENzgE&t=6903s"></iframe>
                            </div>
                        </div>
                    @endif
                    @if(true)
                        <div class="col-sm-4">
                            <div class="card">
                                <iframe allowfullscreen type='text/html' src="https://www.youtube.com/embed/ImtZ5yENzgE&t=6903s"></iframe>
                            </div>
                        </div>
                    @endif
                    @if(true)
                        <div class="col-sm-4">
                            <div class="card">
                                <iframe allowfullscreen type='text/html' src="https://www.youtube.com/embed/ImtZ5yENzgE&t=6903s"></iframe>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endif
        @if(true)
            <hr>
            <div>
                <h4>References</h4>
                <div class="row">
                    @if(true)
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header">Dave Smith</div>
                                <div class="card-body">
                                    <p class="card-text"><span class="profile-labels">Job Title:</span> Coach</p>
                                    <p class="card-text"><span class="profile-labels">Email:</span> coach@coach.com</p>
                                    <p class="card-text"><span class="profile-labels">Phone:</span> 555-111-1212</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(true)
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header">Dave Smith</div>
                                <div class="card-body">
                                    <p class="card-text"><span class="profile-labels">Job Title:</span> Coach</p>
                                    <p class="card-text"><span class="profile-labels">Email:</span> coach@coach.com</p>
                                    <p class="card-text"><span class="profile-labels">Phone:</span> 555-121-1111</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(true)
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header">Dave Smith</div>
                                <div class="card-body">
                                    <p class="card-text"><span class="profile-labels">Job Title:</span> Coach</p>
                                    <p class="card-text"><span class="profile-labels">Email:</span> coach@coach.com</p>
                                    <p class="card-text"><span class="profile-labels">Phone:</span> 555-111-1212</p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endif
        <div>




            <hr class="my-4">
{{--            @include('includes.footer')--}}
        </div>
@endsection





