@extends('layouts.app')

@section('title', $project->title)

@section('content')

    <section id="project-show">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h1 class="ps-3 fw-bold">{{ $project->title }}</h1>
                <a id="index-btn" class="me-3" href="{{ route('admin.projects.index') }}">Index</i></a>
            </div>
            <div class="line-primary my-4"></div>
            <div class="row pb-1">
                <div class="col-7 align-middle">
                    @if (!empty($project->image))
                        <img id="show-img" src="{{ asset('storage/images/' . $project->image) }}" alt="Project Image">
                    @else
                        <img id="show-img" src="{{ asset('images/placeholder.png') }}" alt="Placeholder Image">
                    @endif
                </div>

                <div class="col-5 d-flex flex-column justify-content-between">
                    <p class="pb-0">{{ $project->description }}</p>

                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 d-flex">
                    <div class="me-5 ps-2">

                        @if ($project->category)
                            <p><strong>Category:</strong> <span class="label ms-2"
                                    style="background-color: {{ $project->category->color }}">{{ $project->category->label }}</span>
                            </p>
                        @else
                            <p><strong>Category:</strong> - </p>
                        @endif

                        <p><strong>Technologies:</strong>

                            @if ($project->technologies->isEmpty())
                                -
                            @else
                                @foreach ($project->technologies as $key => $technology)
                                    <span class="technology-label"
                                        style="border: 1px solid {{ $technology->color }}; color: {{ $technology->color }}; font-size: 13px;">{{ $technology->label }}</span>
                                    @if (!$loop->last)
                                        |
                                    @endif
                                @endforeach
                            @endif

                        </p>


                    </div>
                    <div class="me-5">
                        @if ($project->client)
                            <p><strong>Client:</strong> {{ $project->client }}</p>
                        @else
                            <p><strong>Client:</strong> - </p>
                        @endif

                        @if ($project->project_duration)
                            <p><strong>Project Duration:</strong> {{ $project->project_duration }}</p>
                        @else
                            <p><strong>Project Duration:</strong> - </p>
                        @endif

                    </div>
                    <div>

                        @if ($project->completion_year)
                            <p><strong>Completion Year:</strong> {{ $project->completion_year }}</p>
                        @else
                            <p><strong>Completion Year:</strong> - </p>
                        @endif

                        @if ($project->url)
                            <p class="pb-0"><strong>URL:</strong> <a id="project-url"
                                    href="{{ $project->url }}">{{ $project->url }}</a></p>
                        @else
                            <p class="pb-0"><strong>URL:</strong> - </p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
