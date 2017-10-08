@extends('template.base')

@section('content')

    <div class="grid-container">
        <div class="grid-y grid-margin-y">
            <div class="cell large-auto">
                <div class="card">
                    <div class="card-divider">
                        <h3 class="question"></h3>
                    </div>
                    <div class="card-section">
                        <div class="grid-x">
                            <div class="cell large-auto">
                                <div class="expanded button-group">
                                    <a class="button answer" data-answer="1"></a>
                                    <a class="button answer" data-answer="2"></a>
                                    <a class="button answer" data-answer="3"></a>
                                    <a class="button answer" data-answer="4"></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-x">
                            <div class="cell large-auto">
                                <div class="results">
                                    <p class="conclusion"></p>
                                    <p class="correct-answer"></p>
                                    <p class="punishment"></p>
                                </div>
                                <div class="cell large-auto question-categories">
                                    @foreach($questionCategories as $category)
                                        <a class="button primary category-select" href="#" data-categoryId="{{ $category->id }}">{{ $category->name }}</a>
                                    @endforeach
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection