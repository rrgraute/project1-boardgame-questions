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
                <iframe src="https://wheeldecide.com/e.php?c1=10+punten+aftrek&c2=10+punten+aftrek&c3=Twee+beurten+overslaan&c4=Twee+beurten+overslaan&c5=5+punten+aftrek&c6=5+punten+aftrek&c7=Een+beurt+overslaan&c8=Een+beurt+overslaan&c9=Nog+een+keer+draaien&c10=Nog+een+keer+draaien&c11=Beginnen+met+0+punten&time=5" width="500" height="500" scrolling="no" frameborder="0"></iframe>
            </div>

        </div>
    </div>

@endsection