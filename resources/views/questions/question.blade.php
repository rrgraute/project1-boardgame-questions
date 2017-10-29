@extends('template.base')

@section('content')

    <div class="grid-container">
        <div class="grid-y">
            <div class="cell">
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
        <div class="grid-y">
            <div class="cell">
                <iframe src="https://wheeldecide.com/e.php?c1=1&c2=2&c3=3&c4=4&c5=5&c6=6&c7=1&c8=2&c9=3&c10=4&c11=5&time=5" width="500" height="500" scrolling="no" frameborder="0"></iframe>
            </div>

        </div>
    </div>

@endsection