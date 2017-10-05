@extends('template.base')

@section('content')

    <div class="grid-container">
        <div class="grid-y grid-margin-y">
            <div class="cell large-auto">
                <div class="card">
                    <div class="card-divider">
                        <h3>In welke provincie light de stad Rotterdam?</h3>
                    </div>
                    <div class="card-section">
                        <div class="grid-x">
                            <div class="cell large-auto">
                                <div class="expanded button-group">
                                    <a class="button answer" data-answer="a">Noord-Holland</a>
                                    <a class="button answer" data-answer="b">Zuid-Holland</a>
                                    <a class="button answer" data-answer="c">Groningen</a>
                                    <a class="button answer" data-answer="d">Utrecht</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-x">
                            <div class="cell small-auto">
                                <p class="conclusion">Je hebt de vraag goed/fout beantwoord!</p>
                                <p class="punishment">10+ punten</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection