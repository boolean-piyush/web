@extends('layout')

@section('title')
    Welcome to ExamDate
@endsection

@section('meta-tag')
ExamDate.in provides you all the latest Government Jobs, Results and Exams in various sectors such as Railway, Army, Bank, SSC, Police, Navy, UPPSC, UPSSSC in one place.
@endsection



@section('welcome')

<marquee v-for="marquee in marquees" :key="marquees.indexOf(marquee)" behavior="alternate" ><a class="red" :href="marquee[1]"><b>@{{marquee[0]}}</b> </a></marquee>
<br><br>

<div class="row">


    <div class="col-md-6 col-12 rounded" >
            <ul class="list-group">
                <h4 class="list-group-item heading"><span><font-awesome-icon icon="flag"></font-awesome-icon></span> Recently Launched</h4>

                <a style="font-weight: 600" v-for="job in recents" :class="{'list-group-item':true, 'homepage-exams':true, 'strip-color-dark': (recents.indexOf(job)%2 == 0)}" :href="job[1]">@{{job[0]}}
                    <span v-if="job[2]" class="badge badge-pill badge-danger">New</span><br>
                </a>

            </ul>
    </div>


    <div class="col-sm-2 d-md-none"><br></div>

    <div class="col-md-6 col-12 rounded">
            <ul class="list-group">
                <h4 class="list-group-item heading text-center"> <span><font-awesome-icon icon="heart"></font-awesome-icon></span> Most Viewed</h4>

                <a style="font-weight: 600" v-for="job in most_viewed" :class="{'list-group-item':true, 'homepage-exams':true, 'strip-color-dark': (most_viewed.indexOf(job)%2 == 0)}" :href="job[1]">@{{job[0]}}
                    <span v-if="job[2]" class="badge badge-pill badge-danger">New</span><br>
                </a>

            </ul>


    </div>

    <br>
</div>

@endsection